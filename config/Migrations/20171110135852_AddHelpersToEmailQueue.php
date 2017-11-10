<?php
use Migrations\AbstractMigration;

class AddHelpersToEmailQueue extends AbstractMigration
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
        $table->addColumn('helpers', 'text', [
            'default' => null,
            'null' => true,
            'after' => 'theme'
        ]);
        $table->update();
    }
}
