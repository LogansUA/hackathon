<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150416131534 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ev_org DROP FOREIGN KEY FK_8153564399D47173');
        $this->addSql('ALTER TABLE ev_org ADD CONSTRAINT FK_8153564399D47173 FOREIGN KEY (organizer) REFERENCES organizers (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ev_org DROP FOREIGN KEY FK_8153564399D47173');
        $this->addSql('ALTER TABLE ev_org ADD CONSTRAINT FK_8153564399D47173 FOREIGN KEY (organizer) REFERENCES events (id)');
    }
}
