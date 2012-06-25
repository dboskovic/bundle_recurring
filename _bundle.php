<?php

namespace Bundles\Recurring;
use Bundles\SQL\SQLBundle;
use Exception;
use e;

/**
 * Recurring Transaction Bundle
 * Manage recurring transactions / plans / subscriptions. Use this bundle to integrate
 * with whatever payment gateway you're using. Read documentation to learn how.
 * @author David D. Boskovic
 */
class Bundle extends SQLBundle {

	/**
	 * Execute any charges that need to be run for this day, and any charges that may have been missed up to this date.
	 * @author David Boskovic
	 */
	public function _on_cron_midnight() {

		// charge today's date
		$this->chargeDayOfMonth(date('d', time()),date('m', time()));

	}


	/**
	 * Execute any subscriptions that have yet to be attempted for a specific day.
	 * @author David Boskovic
	 */
	public function chargeDayOfMonth($day, $month = false) {

		// query returning subscriptions scheduled for this day

		// iterate through subscriptions scheduled for today and attempt to charge them  - verify no existing invoice

		// find any failed subscriptions on 1st try for failures x days before this (webappsetting.failed-subscription-retry-window)

		// find any failed subscriptions on 2nd try for failures x days before this (webappsetting.second-failed-subscription-retry-window)

	}

	
}

