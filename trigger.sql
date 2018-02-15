/*um trigger +e lançado quando escolhemos o fornecedor secundário, caso ese seja igual ao primário já escolhido apra esse memso produto*/
/* é feito por esta ordem uma vez que o primário é inserido primeiro no registo de um novo produto*/

CREATE OR REPLACE FUNCTION fornecedores_sobrepostos() RETURNS trigger AS $fornecedores_sobrepostos$
BEGIN
    IF EXISTS (SELECT forn_primario FROM produto p
	           WHERE p.forn_primario = NEW.nif
	           AND p.ean = NEW.ean)
    THEN RAISE EXCEPTION 'O fornecedor com o nif % já foi usado como primário.', NEW.nif;
    END IF;
    RETURN NEW;
END;
$fornecedores_sobrepostos$ LANGUAGE plpgsql;


DROP TRIGGER IF EXISTS insert_fornece_sec;
CREATE TRIGGER inserir_fornece_sec BEFORE INSERT ON fornece_sec
FOR EACH ROW EXECUTE PROCEDURE fornecedores_sobrepostos();


