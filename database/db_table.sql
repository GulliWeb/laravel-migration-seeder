/* Comando per creare tabella trains in PHPmyAdmin */
CREATE TABLE `trains`.`trains`
(`ID` INT NOT NULL ,
`Stazione_partenza` VARCHAR NOT NULL ,
`Stazione_arrivo` VARCHAR NOT NULL ,
`Orario_partenza` TIME NOT NULL ,
`Orario_arrivo` TIME NOT NULL ,
`Cod_treno` INT NOT NULL ,
`Num_carrozze` INT NOT NULL ,
`In_orario` BOOLEAN NOT NULL ,
`Cancellato` BOOLEAN NOT NULL )
 ENGINE = InnoDB;
