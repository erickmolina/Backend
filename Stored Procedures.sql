--------------------------------------------------------------------------------------------------------------------------------------
-- Procedimientos
--------------------------------------------------------------------------------------------------------------------------------------

--- Empresa

--------------------------------------------------------------------------------------------------------------------------------------
--Inserta una empresa
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_InsertarEmpresa(IN NEmpresa VARCHAR(255), IN Tel VARCHAR(255))
BEGIN
INSERT INTO Empresa(Nombre,Telefono) VALUES (NEmpresa,Tel);
END
--------------------------------------------------------------------------------------------------------------------------------------
--Actualizar una empresa
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_ActualizarEmpresa(IN Id INT , IN NEmpresa VARCHAR(255), IN Tel VARCHAR(255))
BEGIN
UPDATE Empresa SET Nombre = NEmpresa, Telefono = Tel WHERE IdEmpresa = Id;
END
--------------------------------------------------------------------------------------------------------------------------------------

--Administrador

--------------------------------------------------------------------------------------------------------------------------------------
--Actualizar la Ubicacion de la Unidad
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_ActualizarLLUnidad(IN Identifier VARCHAR(255), IN Lat VARCHAR(255), IN Lon VARCHAR(255), IN State VARCHAR(255))
BEGIN
	UPDATE Unidades SET ULatitud = Lat,ULongitud = Lon,Estado = State WHERE Identificador = Identifier ;
END$$

CREATE PROCEDURE SP_HorarioxRuta(IN NombreRuta VARCHAR(255))
BEGIN
	SELECT Descripcion,Tarifa, Dias, HoraSalida
FROM Rutas R
INNER JOIN Horarios H ON H.FK_Ruta = R.IdRuta
INNER JOIN Dias D ON D.IdDia = H.FK_Dias
INNER JOIN Horas Hr ON Hr.FK_Horario = H.IdHorario
WHERE Descripcion = NombreRuta;
END$$

--------------------------------------------------------------------------------------------------------------------------------------
--Muestra la Lista de Rutas
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_MostrarRutas()
BEGIN
	SELECT Descripcion FROM Rutas;
END$$
--------------------------------------------------------------------------------------------------------------------------------------
--Muestra las paradas por ruta
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_ParadasxRuta(IN NombreRuta VARCHAR (255))
BEGIN
	SELECT Informacion,PLatitud,PLongitud FROM Rutas R INNER JOIN Paradas P ON R.IdRuta = P.FK_Ruta WHERE Descripcion = NombreRuta;
END$$
--------------------------------------------------------------------------------------------------------------------------------------
--Muestra las unidades por ruta
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_UnidadesxRuta(IN `NombreRuta` VARCHAR(255))
BEGIN
		SELECT Descripcion,Identificador,ULatitud,ULongitud,Estado FROM Rutas R INNER JOIN Unidades U ON R.IdRuta = U.FK_Ruta WHERE Descripcion = NombreRuta;
END$$

--------------------------------------------------------------------------------------------------------------------------------------
--Inserta un Administrador de Empresa
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_InsertarAdmin(IN EmpresaId INT, IN User VARCHAR(255), IN Passw VARCHAR(255),IN Mail VARCHAR(255))
BEGIN
	INSERT INTO Administrador(FK_Empresa,Usuario,Contrasena,Correo) VALUES(EmpresaId,User,Passw,Mail);
END
--------------------------------------------------------------------------------------------------------------------------------------
-- Valida sin existe un Usuario Administrador de Empresa
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_LoginAdmin( IN User VARCHAR( 255 ) , IN Passw VARCHAR( 255 ) ) 
BEGIN 
SELECT FK_Empresa, IdAdministrador FROM Administrador WHERE Usuario = User AND Contrasena = Passw;
END
--------------------------------------------------------------------------------------------------------------------------------------
--Valida sin existe un Usuario Administrador
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_LoginSuperAdmin( IN User VARCHAR( 255 ) , IN Passw VARCHAR( 255 ) ) 
BEGIN 
SELECT IdSuperAdmin, Correo FROM SuperAdministrador WHERE Usuario = User AND Contrasena = Passw;
END
--------------------------------------------------------------------------------------------------------------------------------------
--Inserta un Usuario Aministrador del sistema
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_InsertarSupeAdmin(IN User VARCHAR(255), IN Passw VARCHAR(255),IN Mail VARCHAR(255))
BEGIN
	INSERT INTO SuperAdministrador(Usuario,Contrasena,Correo) VALUES(User,Passw,Mail);
END
--------------------------------------------------------------------------------------------------------------------------------------
--Inserta una empresa y s usuario
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_InsertarEmpxUser( IN NEmpresa VARCHAR( 255 ) , IN Tel VARCHAR( 255 ) , IN User VARCHAR( 255 ) , IN Passw VARCHAR( 255 ) , IN Mail VARCHAR( 255 ) ) 
BEGIN 
INSERT INTO Empresa( Nombre, Telefono ) VALUES (NEmpresa, Tel);
INSERT INTO Administrador( FK_Empresa, Usuario, Contrasena, Correo ) VALUES (LAST_INSERT_ID( ) , User, Passw, Mail);
END
--------------------------------------------------------------------------------------------------------------------------------------
--Carga la lista de Empresas
--------------------------------------------------------------------------------------------------------------------------------------
CREATE PROCEDURE SP_ListaEmpresas
BEGIN
	SELECT IdEmpresa,Nombre FROM Empresa;
END

--------------------------------------------------------------------------------------------------------------------------------------
-- Carga los datos de la empresa
--------------------------------------------------------------------------------------------------------------------------------------

CREATE PROCEDURE SP_ObtenerDatos(IN idEmpr INT)
BEGIN
	SELECT Nombre,Telefono FROM Empresa WHERE IdEmpresa = idEmpr;
END
--------------------------------------------------------------------------------------------------------------------------------------
-- Inserta una Ruta
--------------------------------------------------------------------------------------------------------------------------------------


CREATE PROCEDURE SP_InsertaRuta(IN IdEmp INT, IN Descr VARCHAR(255), IN Tari VARCHAR(255))
BEGIN
INSERT INTO Rutas(FK_Empresa,Descripcion,Tarifa) VALUES (IdEmp,Descr,Tari);
END
