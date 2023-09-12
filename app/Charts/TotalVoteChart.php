<?php

namespace App\Charts;

use App\Models\Candidate;
use App\Models\Voters;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class TotalVoteChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $candidates = Candidate::all();

        $labels = [];
        (int)$votes = [];

        foreach ($candidates as $candidate) {
            $candidateName = $candidate->nama_ketua . ' & ' . $candidate->nama_wakil;

            $voteCount = Voters::where('candidate_id', $candidate->id)->count();

            $labels[] = $candidateName;
            $votes[] = (int)$voteCount;
        }


        return $this->chart->barChart()
            ->addData('Jumlah Suara', $votes)
            ->setColors(['#3B7DDD'])
            ->setXAxis($labels);
    }
}
