<?php

namespace App\Models\Structural\Proxy;

class WeatherApi implements Weather
{
    public function get(\DateTime $date): array
    {
        $data = [];

        try {
            $url = 'https://api.open-meteo.com/v1/forecast?latitude=48.47195363840051&longitude=35.07738157411864&hourly=temperature_2m&start_date=' . $date->format('Y-m-d') . '&end_date=' . $date->format('Y-m-d');
            echo("URL: " . $url . PHP_EOL);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            $response = curl_exec($ch);
            if ($response === false) {
                echo(curl_error($ch));

                return $data;
            }
            curl_close($ch);
            $data = json_decode($response, true);
        } catch (\Exception $e) {
            echo($e->getMessage());
        }

        return $data;
    }
}
