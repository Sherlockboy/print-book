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

    public function formula3()
    {
        return view('pages.formula3');
    }

    public function renderFormula3(Request $request)
    {
        $rows = $this->generateReversedRows($request->page_count);

        return view('components.row', [
            'rows' => $rows,
            'formula' => 3
        ])->render();
    }

    protected function generateRows($page_count, $type = null)
    {
        $rows = [];
        if (!($page_count % 4)) {
            for ($i = 1; $i <= $page_count; $i = $i + 32) {
                if ($page_count - $i >= 32) {
                    if ($type == 3) {
                        $rows[] = $this->singleRowReverse($i, $i + 31);
                    } else {
                        $rows[] = $this->singleRow($i, $i + 31);
                    }
                } else {
                    if ($type == 3) {
                        $rows[] = $this->singleRowReverse($i, $page_count);
                    } else {
                        $rows[] = $this->singleRow($i, $page_count);
                    }
                }
            }
        }

        return $rows;
    }

    protected function generateReversedRows($page_count)
    {
        return array_reverse($this->generateRows($page_count, 3));
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

    protected function singleRowReverse($start, $end)
    {
        $result1 = [];
        $result2 = [];
        $avg = ($start + $end) / 2;
        while ($start < $avg) {
            $result1[] = $end;
            $result1[] = $start;
            array_unshift($result2, $end - 1);
            array_unshift($result2, $start + 1);
            $start = $start + 2;
            $end = $end - 2;
        }

        return [
            'first' => implode(',', $result1),
            'second' => implode(',', $result2)
        ];
    }
}
