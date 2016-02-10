<?php

namespace SiteBundle\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160209161045 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // Remove Specialties
        $this->addSql("UPDATE specialties SET deleted_date = NOW() WHERE id = 55");
        $this->addSql("UPDATE specialties SET deleted_date = NOW() WHERE id = 59");
        $this->addSql("UPDATE specialties SET deleted_date = NOW() WHERE id = 63");
        $this->addSql("UPDATE specialties SET deleted_date = NOW() WHERE id = 64");
        $this->addSql("UPDATE specialties SET deleted_date = NOW() WHERE id = 66");

    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
