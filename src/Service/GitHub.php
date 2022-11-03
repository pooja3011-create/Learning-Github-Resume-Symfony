<?php

namespace App\Service;

class GitHub
{
    private $login;

    public function __construct($username) {
        $this->login = $username;
    }

    private function userRequest($get) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.github.com'.$get.'?access_token=dadba0c3786b41b7f13c96cc9583803aa38c2a24');
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'PHP');
        
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    public function isUserExists() {
        $result = $this->userRequest('/users/'.$this->login);
        if (!isset($result['login'])) {
            return $result['message'];
        } else {
            return true;
        }
    }
    
    public function getUserData() {
        return $this->userRequest('/users/'.$this->login);
    }

    public function getUserRepos() {
        return $this->userRequest('/users/'.$this->login.'/repos?per_page=30');
    }

    public function getUserLangs() {
        $repos = $this->getUserRepos($this->login);
        $languages = array();
        $divider   = 0;
        if($repos) {
            foreach ($repos as $repo) {
                $repoLangs = $this->userRequest('/repos/'.$this->login.'/'.$repo['name'].'/languages');
                foreach ($repoLangs as $key => $value) 
                {
                    if(isset($languages[$key])) {
                        $languages[$key]['value'] += $value;
                    } else {
                        $languages[$key] =  array('name' => $key, 'value' => $value);
                    }
                    $divider += $value;
                }
                
            }
        }
        // Sort ASC
        usort($languages, function ($a, $b) { 
            return strnatcmp($b['value'], $a['value']); 
        });

        // Find percentage of languages
        if($languages) {
            foreach ($languages as &$language) {
                $language['percentage'] = round(($language['value'] / $divider) * 100,2);
            }    
        }
        return $languages;
    }
}