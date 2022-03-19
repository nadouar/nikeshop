<?xml version="1.0"
	xmlms:xs="http://www.w3.org/2001/XMLSchema"?>
	<xs:schema>
	<xs:complexType name="user">
		<xs:sequance>
			<xs:attribut name="username" type="xs:string"/>
			<xs:attribut name="firstname" type="xs:string"/>
			<xs:attribut name="lastname" type="xs:string"/>
			<xs:attribut name="tel" type="xs:int"/>
			<xs:attribut name="adresse" type="xs:string"/>
			<xs:attribut name="password" type="xs:string"/>
		</xs:sequance>
		<xs:element name="personne" type="user"/>	


</xs:schema>

