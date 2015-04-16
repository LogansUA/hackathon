<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150416130942 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE ev_org (id INT AUTO_INCREMENT NOT NULL, event INT DEFAULT NULL, organizer INT DEFAULT NULL, INDEX IDX_815356433BAE0AA7 (event), INDEX IDX_8153564399D47173 (organizer), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE organizers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, phone VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE events (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, datetime DATETIME DEFAULT NULL, latitude NUMERIC(18, 15) DEFAULT NULL, longitude NUMERIC(18, 15) DEFAULT NULL, price INT DEFAULT NULL, free TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ev_org ADD CONSTRAINT FK_815356433BAE0AA7 FOREIGN KEY (event) REFERENCES events (id)');
        $this->addSql('ALTER TABLE ev_org ADD CONSTRAINT FK_8153564399D47173 FOREIGN KEY (organizer) REFERENCES events (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ev_org DROP FOREIGN KEY FK_815356433BAE0AA7');
        $this->addSql('ALTER TABLE ev_org DROP FOREIGN KEY FK_8153564399D47173');
        $this->addSql('DROP TABLE ev_org');
        $this->addSql('DROP TABLE organizers');
        $this->addSql('DROP TABLE events');
    }
}
