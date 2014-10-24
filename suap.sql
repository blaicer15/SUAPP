 create database suap;
\c suap
create table institucion(
clave_inst text,
nombre_inst text,
nombre_dir text,
direccion_inst text,
email_inst text,
email_dir text
);
create table c_institucion(
id serial,
clave_inst text,
nombre_inst text,
nombre_dir text,
direccion_inst text,
email_inst text,
email_dir text
);

insert into c_institucion values(default, '001TECVALLES', 'tec valles', 'fulanito de tal', 'carretera al ingenio bla bla', 'tecvalles@gmail.com','fulanito@gmail.com');
insert into c_institucion values(default, '001TECMADERO', 'tec madero', 'josejose', 'carretera a nose donde bla bla', 'tecmadero@gmail.com','josejose@gmail.com');
insert into c_institucion values(default, '001TECMTY','tec monterrey', 'jose perez leon', ' en monterrey bla bla bla', 'tecmty@gmail.com','josepl@gmail.com');

CREATE TABLE usuarios(
id serial,
nombre text,
usuario text,
correo text,
pass text,
rol int
);

INSERT INTO usuarios VALUES(default, 'Administrador PRUEBA', 'adminSUAP', 'suap@gmail.com', 'suap', '1');


create table recursos_financieros(
	id_rf serial primary key, 
    monto_por_cuatrimestre float default null,
	monto_solicitado_dgest float default null);
	partida_solicitada text default null,
	monto_solicitado float default null,
	descripcion_bienes text default null,
	total float default null, 
	materiales_suministros text default null, 
	servicios_generales text default null,
	monto_tec_participante float default null,
	apoyo_eco float default null, 
    monto_institucion float default null, 
    monto_otras_instituciones float default null,
    presupuesto float default null,
    id_instituciones int default  null, 
    foreign key (id_instituciones) references instituciones(id_instituciones)
);