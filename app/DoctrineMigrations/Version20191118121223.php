<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191118121223 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE Queue');
        $this->addSql('ALTER TABLE Job DROP FOREIGN KEY FK_C395A618615D27E1');
        $this->addSql('ALTER TABLE Job ADD status VARCHAR(255) DEFAULT NULL, DROP lastResult, CHANGE backupLocation_id backupLocation_id INT DEFAULT NULL');
        $this->addSql('DROP INDEX idx_c395a618615d27e1 ON Job');
        $this->addSql('CREATE INDEX IDX_C395A61817EE0EA ON Job (backupLocation_id)');
        $this->addSql('ALTER TABLE Job ADD CONSTRAINT FK_C395A618615D27E1 FOREIGN KEY (backupLocation_id) REFERENCES BackupLocation (id)');
        $this->addSql('ALTER TABLE BackupLocation DROP maxParallelJobs, CHANGE host host VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE Client DROP state, DROP maxParallelJobs, DROP data');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE Queue (id INT AUTO_INCREMENT NOT NULL, job_id INT DEFAULT NULL, date DATETIME NOT NULL, runningSince DATETIME DEFAULT NULL, priority INT NOT NULL, state VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, aborted TINYINT(1) NOT NULL, data LONGTEXT DEFAULT NULL COLLATE utf8_unicode_ci, INDEX IDX_BE3C5067BE04EA9 (job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE Queue ADD CONSTRAINT FK_BE3C5067BE04EA9 FOREIGN KEY (job_id) REFERENCES Job (id)');
        $this->addSql('ALTER TABLE BackupLocation ADD maxParallelJobs INT DEFAULT 1 NOT NULL, CHANGE host host VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE Client ADD state VARCHAR(255) NOT NULL COLLATE latin1_swedish_ci, ADD maxParallelJobs INT DEFAULT 1 NOT NULL, ADD data LONGTEXT DEFAULT NULL COLLATE latin1_swedish_ci');
        $this->addSql('ALTER TABLE Job DROP FOREIGN KEY FK_C395A61817EE0EA');
        $this->addSql('ALTER TABLE Job ADD lastResult VARCHAR(10) DEFAULT NULL COLLATE latin1_swedish_ci, DROP status, CHANGE backupLocation_id backupLocation_id INT NOT NULL');
        $this->addSql('DROP INDEX idx_c395a61817ee0ea ON Job');
        $this->addSql('CREATE INDEX IDX_C395A618615D27E1 ON Job (backupLocation_id)');
        $this->addSql('ALTER TABLE Job ADD CONSTRAINT FK_C395A61817EE0EA FOREIGN KEY (backupLocation_id) REFERENCES BackupLocation (id)');
    }
}
