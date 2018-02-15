# IST-DataBaseManagement
Practical component of university bachelors subject. 

EA - Entity+Association model of the database.
schema - file used to create the tables.
populate - file used to populate the tables.
queries - set of queries built to answer the questions:
a) What is the name of the supplier that provided the most number of categories? Note that you can
be more than one supplier.
b) Which primary suppliers (name and nif) who provided products of all
simple categories?
c) Which products (ean) have never been replaced?
d) Which products (ean) with a number of secondary suppliers greater than 10?
e) Which products (ean) were always replaced by the same operator?

ModeloMultidimencional - file used to build OLAP model with 2 dimensions, filling them from the original tables. 
data_analytics - file used to query the database with rollup function. 
populate_rollup - file used to populate the table in order to see if the "rollup" instruction (file data_analytics) was working as intended

web - folder containing several PHP and HTML pages that allow the user to:
a) Insert and remove categories and sub-categories;
b) Insert and remove a new product and its respective suppliers (primary or secondary), ensuring that this operation is atomic;
c) List replacement events of a given product, including the number of units reset;
d) Change the name of a product;
e) List all the sub-categories of a super-category, at all levels of depth.
