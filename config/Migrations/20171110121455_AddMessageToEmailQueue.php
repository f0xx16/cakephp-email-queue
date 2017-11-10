<?php

use Migrations\AbstractMigration;

class AddMessageToEmailQueue extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('email_queue');
        $table->addColumn('message', 'text', [
            'default' => null,
            'null' => true,
            'after' => 'headers'
        ]);
        $table->update();
    }
}
