/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  11/09/2013 13:16:52                      */
/*==============================================================*/

/*==============================================================*/
/* création de la base de données et de l'utilisateur */
/*==============================================================*/

create database if not exists seedbox;

create user 'seedboxuser'@'localhost' identified by 'seedboxpass';

GRANT ALL PRIVILEGES ON `seedbox` . * TO 'seedboxuser'@'localhost' WITH GRANT OPTION ;

USE seedbox;

drop table if exists T_FOURNISSEUR;

drop table if exists T_SEEDBOX;

drop table if exists T_TYPEABONN;

/*==============================================================*/
/* Table : T_FOURNISSEUR                                        */
/*==============================================================*/
create table T_FOURNISSEUR
(
   F_NUMFRS             int not null,
   F_NOMFRS             varchar(20),
   primary key (F_NUMFRS)
);

/*==============================================================*/
/* Table : T_SEEDBOX                                            */
/*==============================================================*/
create table T_SEEDBOX
(
   SB_ID                int not null,
   F_NUMFRS             int not null,
   TA_CODEABONN         varchar(3) not null,
   SB_NOM               varchar(20),
   SB_DATEAJOUT         date,
   SB_PRIX              decimal(5,2),
   SB_IMAGE             varchar(40),
   primary key (SB_ID)
);

/*==============================================================*/
/* Table : T_TYPEABONN                                          */
/*==============================================================*/
create table T_TYPEABONN
(
   TA_CODEABONN         varchar(3) not null,
   TA_LIBELLEABONN      varchar(30),
   primary key (TA_CODEABONN)
);

alter table T_SEEDBOX add constraint FK_APPARTENIR foreign key (TA_CODEABONN)
      references T_TYPEABONN (TA_CODEABONN) on delete restrict on update restrict;

alter table T_SEEDBOX add constraint FK_FOURNIR foreign key (F_NUMFRS)
      references T_FOURNISSEUR (F_NUMFRS) on delete restrict on update restrict;


INSERT INTO T_TYPEABONN VALUES('A01', 'Abonnement sur 1 mois');
INSERT INTO T_TYPEABONN VALUES('A06', 'Abonnement sur 6 mois');
INSERT INTO T_TYPEABONN VALUES('A12', 'Abonnement sur 12 mois');
INSERT INTO T_TYPEABONN VALUES('A27', 'Abonnement sur 27 mois');

INSERT INTO T_FOURNISSEUR VALUES('01', 'OVH');
INSERT INTO T_FOURNISSEUR VALUES('02', '1&1');
INSERT INTO T_FOURNISSEUR VALUES('03', 'seedbox.fr');

INSERT INTO T_SEEDBOX VALUES(001, '01', 'A01', 'Hébergement 1 mois', '10/09/2013', '6', ' ');
INSERT INTO T_SEEDBOX VALUES(002, '01', 'A06', 'Hébergement 6 mois', '10/09/2013', '30', ' ');
INSERT INTO T_SEEDBOX VALUES(003, '01', 'A12', 'Hébergement Gold', '10/09/2013', '50', ' ');
INSERT INTO T_SEEDBOX VALUES(004, '02', 'A06', 'Hébergement 6 mois', '10/09/2013', '30', ' ');
INSERT INTO T_SEEDBOX VALUES(005, '03', 'A12', 'Hébergement annuel', '10/09/2013', '60', ' ');
INSERT INTO T_SEEDBOX VALUES(006, '03', 'A27', 'Hébergement 2 ans avec 3 mois offerts', '10/09/2013', '110', ' ');
