<?php

class MoaStorageAdapter implements Kumite\Adapters\StorageAdapter
{
	/**
	 * @return participantId
	 */
	public function createParticipant($testKey, $variantKey)
	{
		$participant = new KumiteParticipant(array(
			'test' => $testKey,
			'variant' => $variantKey
		));
		$participant->save();
		return $participant->id();
	}

	public function createEvent($testKey, $variantKey, $eventKey, $participantId, $metadata=null)
	{
		$event = new KumiteEvent(array(
			'test' => $testKey,
			'variant' => $variantKey,
			'event' => $eventKey,
			'participantId' => $participantId,
			'metadata' => $metadata			
		));
		$event->save();
	}
}

