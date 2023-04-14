<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230414100742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session DROP FOREIGN KEY FK_D044D5D42C8102D3');
        $this->addSql('DROP INDEX UNIQ_D044D5D42C8102D3 ON session');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE session ADD CONSTRAINT FK_D044D5D42C8102D3 FOREIGN KEY (typical_session_id) REFERENCES typical_session (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D044D5D42C8102D3 ON session (typical_session_id)');
    }
}
