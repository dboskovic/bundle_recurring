<?php

namespace Bundles\Recurring\Models;
use Bundles\SQL\Model;
use Exception;
use e;

class Subscription extends Model {
	
	public function charge($day, $month = false) {

		// verify that this day and month have no correlating invoice already

		// generate a new invoice

		// create an invoice item for the subscription amount (tax deductible on or off)

		// execute the invoice charge event.

		// determine whether the invoice charge succeeded or failed

		// log the respective activity item to ensure that an email can be triggered if desired.

		/**
		 * Log The Activity for a declined recurring transaction.
		 */
		e::$activity->log('recurring.subscription.declined', $this, array());

		/**
		 * Log The Activity for a declined recurring transaction.
		 */
		e::$activity->log('recurring.subscription.charged', $this, array());

		/**
		 * Log The Activity for a declined recurring transaction.
		 */
		e::$activity->log('recurring.subscription.no-card', $this, array());



	}

	/**
	 * Cancel this subscription
	 *
	 * @return true or false
	 * @author David D. Boskovic
	 **/
	public function cancel()
	{
		// check to see whether it's' currently cancelled

		
		/**
		 * Log The Activity for a declined recurring transaction.
		 */
		e::$activity->log('recurring.subscription.cancelled', $this, array());
	}

	/**
	 * Renew a subscription
	 *
	 * @return true or false
	 * @author David D. Boskovic
	 **/
	public function renew()
	{
		// verify it is currently held (cancelled subscriptions cannot be renewed)

		/**
		 * Log The Activity for a declined recurring transaction.
		 */
		e::$activity->log('recurring.subscription.renewed', $this, array());
	}

	/**
	 * Hold a subscription
	 *
	 * @return true or false
	 * @author David D. Boskovic
	 **/
	public function hold()
	{
		// verify it is not already held


		/**
		 * Log The Activity for a declined recurring transaction.
		 */
		e::$activity->log('recurring.subscription.held', $this, array());
	}
	
}