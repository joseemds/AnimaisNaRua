-- drop database if exists db_animais
create database if not exists db_animais;
use database db_animais;

create table tb_responsaveis(
    res_codigo int primary key auto_increment,
    res_nome varchar(30) not null,
    res_telefone varchar(15) not null,
);

create table tb_cidades(
    cid_codigo int primary key auto_increment,
    cid_nome varchar(20) not null
);

create table tb_bairros(
    bai_codigo int primary key auto_increment,
    bai_nome varchar(25) not null,
    bai_cid_codigo int references tb_cidades(cid_codigo)
);

create table tb_animais(
    ani_codigo int primary key auto_increment,
    ani_desc varchar(50) not null,
    ani_est enum('bem', 'machucado') not null,
    ani_dat_enc date not null,
    ani_res_codigo int references tb_responsaveis(res_codigo), 
    ani_bai_codigo int references tb_bairros(bai_codigo)
);

