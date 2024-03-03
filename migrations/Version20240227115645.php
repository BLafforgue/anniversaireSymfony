<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240227115645 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_70E4FA78F85E0677 ON `member`');
        $this->addSql('ALTER TABLE `member` ADD firstname VARCHAR(255) NOT NULL, DROP username, DROP roles, CHANGE password lastname VARCHAR(255) NOT NULL, CHANGE date_birthday birthday DATE NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `member` ADD password VARCHAR(255) NOT NULL, ADD username VARCHAR(180) NOT NULL, ADD roles JSON NOT NULL, DROP lastname, DROP firstname, CHANGE birthday date_birthday DATE NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_70E4FA78F85E0677 ON `member` (username)');
    }
}
