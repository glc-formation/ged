create table documents
(
	id int not null
		constraint documents_pk
			primary key,
	source text not null,
	content text not null,
	length int
);

alter table documents
    add owner_id int default 0 not null;



