<?php

namespace SiteBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160121093235 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {

        // Remove Physicians
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Eric' AND last_name = 'Zeidman'");
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Vikas' AND last_name = 'Kalra'");
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Robert' AND last_name = 'Cohen'");
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Aslam' AND last_name = 'Pervez'");
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Divya' AND last_name = 'Malladi'");
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Rahool' AND last_name = 'Karnik'");
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Aye' AND last_name = 'Win'");
        $this->addSql("UPDATE physicians SET deleted_date = NOW() WHERE first_name = 'Gary' AND last_name = 'Craine'");

        // MOVE Physicians
        $this->addSql("UPDATE practices_has_physicians SET practice_id = 189, practice_location_id = 330 WHERE physician_id = 514");
        $this->addSql("UPDATE practices_has_physicians SET practice_id = 82, practice_location_id = 172 WHERE physician_id = 220");
        $this->addSql("UPDATE practices_has_physicians SET practice_id = 82, practice_location_id = 172 WHERE physician_id = 222");

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
