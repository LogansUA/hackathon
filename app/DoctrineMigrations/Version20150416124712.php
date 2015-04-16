<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150416124712 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ev_org (id INT AUTO_INCREMENT NOT NULL, event INT DEFAULT NULL, organizer INT DEFAULT NULL, INDEX IDX_815356433BAE0AA7 (event), INDEX IDX_8153564399D47173 (organizer), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ev_org ADD CONSTRAINT FK_815356433BAE0AA7 FOREIGN KEY (event) REFERENCES event (id)');
        $this->addSql('ALTER TABLE ev_org ADD CONSTRAINT FK_8153564399D47173 FOREIGN KEY (organizer) REFERENCES event (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE ev_org');
    }
}
