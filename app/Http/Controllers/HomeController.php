<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function formula1()
    {
        return view('pages.formula1');
    }

    public function renderFormula1(Request $request)
    {
        if ($request->page_count % 4) {
            $rows = $this->singleRow(1, 0);
        } else {
            $rows = $this->singleRow(1, $request->page_count);
        }

        return view('components.row', [
            'rows' => $rows,
            'formula' => 1
        ])->render();
    }

    public function formula2()
    {
        return view('pages.formula2');
    }

    public function renderFormula2(Request $request)
    {
        $rows = $this->generateRows($request->page_count);

        return view('components.row', [
            'rows' => $rows,
            'formula' => 2
        ])->render();
    }

    protected function generateRows($page_count)
    {
        $rows = [];
        if (!($page_count % 4)) {
            for ($i = 1; $i <= $page_count; $i = $i + 32) {
                if ($page_count - $i >= 32) {
                    $rows[] = $this->singleRow($i, $i + 31);
                } else {
                    $rows[] = $this->singleRow($i, $page_count);
                }
            }
        }

        return $rows;
    }

    protected function singleRow($start, $end)
    {
        $result1 = [];
        $result2 = [];
        $avg = ($start + $end) / 2;
        while ($start < $avg) {
            $result1[] = $end;
            $result1[] = $start;
            $result2[] = $start + 1;
            $result2[] = $end - 1;
            $start = $start + 2;
            $end = $end - 2;
        }

        return [
            'first' => implode(',', $result1),
            'second' => implode(',', $result2)
        ];
    }
}
