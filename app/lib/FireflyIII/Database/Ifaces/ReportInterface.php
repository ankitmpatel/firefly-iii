<?php

namespace FireflyIII\Database\Ifaces;


use Carbon\Carbon;

interface ReportInterface
{

    /**
     * @param \Account $account
     * @param Carbon   $month
     *
     * @return float
     */
    public function getExpenseByMonth(\Account $account, Carbon $month);

    /**
     * @param \Account $account
     * @param Carbon   $month
     *
     * @return float
     */
    public function getIncomeByMonth(\Account $account, Carbon $month);

} 