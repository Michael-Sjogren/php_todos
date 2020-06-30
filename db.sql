CREATE TABLE Task
(
  TaskID int(11) AUTO_INCREMENT PRIMARY kEY NOT NULL,
  TaskName varchar(256) not null,
  TaskCompleted TINYINT(1) DEFAULT 0 not null
);

INSERT INTO Task (TaskName) VALUES ('Task one.');
