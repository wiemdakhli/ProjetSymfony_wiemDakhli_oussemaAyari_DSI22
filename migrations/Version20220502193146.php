<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220502193146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE soutenance ADD matricule_id INT NOT NULL');
        $this->addSql('ALTER TABLE soutenance ADD CONSTRAINT FK_4D59FF6E9AAADC05 FOREIGN KEY (matricule_id) REFERENCES enseignant (id)');
        $this->addSql('CREATE INDEX IDX_4D59FF6E9AAADC05 ON soutenance (matricule_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE soutenance DROP FOREIGN KEY FK_4D59FF6E9AAADC05');
        $this->addSql('DROP INDEX IDX_4D59FF6E9AAADC05 ON soutenance');
        $this->addSql('ALTER TABLE soutenance DROP matricule_id');
    }
}
