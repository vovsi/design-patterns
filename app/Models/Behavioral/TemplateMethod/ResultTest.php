<?php

namespace App\Models\Behavioral\TemplateMethod;

abstract class ResultTest
{
    public function getResult(): array
    {
        $data = $this->getData();
        $data = $this->prepareData($data);

        return $this->generateResult($data);
    }

    abstract protected function generateResult(array $result): array;

    protected function prepareData(array $data): array
    {
        $result = [];

        foreach ($data as $item) {
            if ($item['num'] === 1) {
                $result[] = ['num' => $item['num'], 'result' => $item['answer'] === "yes"];
            } else if ($item['num'] === 2) {
                $result[] = ['num' => $item['num'], 'result' => $item['answer'] === "no"];
            } else if ($item['num'] === 3) {
                $result[] = ['num' => $item['num'], 'result' => $item['answer'] === "yes"];
            }
        }

        return $result;
    }

    protected function getData(): array
    {
        return [
            ['num' => 1, 'question' => 'PHP is programming language?', 'answer' => 'yes'],
            ['num' => 2, 'question' => 'Angular is programming language?', 'answer' => 'yes'],
            ['num' => 3, 'question' => 'C# is programming language?', 'answer' => 'yes'],
        ];
    }
}
