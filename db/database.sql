-- drop database if exists db_animais
create database if not exists db_animais;
use database db_animais;

create table tb_bairros(
    bai_codigo int primary key auto_increment,
    bai_nome varchar(25) not null
);

create table tb_animais(
    ani_codigo int primary key auto_increment,
    ani_desc varchar(255) not null,
    ani_est enum('bem', 'machucado') not null,
    ani_dat_enc date not null,
    ani_pessoa varchar(50) not null,
    ani_contato varchar(15) not null,
    ani_bai_codigo int references tb_bairros(bai_codigo)
);

