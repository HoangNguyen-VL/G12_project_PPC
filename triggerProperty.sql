CREATE TRIGGER after_insert_property
	ON dbo.Property
	AFTER INSERT 
AS BEGIN
	SET NOCOUNT ON;
    
    UPDATE Property
    SET property_code = CONCAT('BĐS-', RIGHT('00000' + CAST(Property.Id AS VARCHAR(5)), 5))
    FROM inserted
    WHERE Property.Id = inserted.Id;
END
