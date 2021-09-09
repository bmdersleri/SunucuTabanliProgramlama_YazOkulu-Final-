-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: northwind
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Temporary view structure for view `products by category`
--

DROP TABLE IF EXISTS `products by category`;
/*!50001 DROP VIEW IF EXISTS `products by category`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `products by category` AS SELECT 
 1 AS `CategoryName`,
 1 AS `ProductName`,
 1 AS `QuantityPerUnit`,
 1 AS `UnitsInStock`,
 1 AS `Discontinued`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `product sales for 1997`
--

DROP TABLE IF EXISTS `product sales for 1997`;
/*!50001 DROP VIEW IF EXISTS `product sales for 1997`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `product sales for 1997` AS SELECT 
 1 AS `CategoryName`,
 1 AS `ProductName`,
 1 AS `ProductSales`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `orders qry`
--

DROP TABLE IF EXISTS `orders qry`;
/*!50001 DROP VIEW IF EXISTS `orders qry`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `orders qry` AS SELECT 
 1 AS `OrderID`,
 1 AS `CustomerID`,
 1 AS `EmployeeID`,
 1 AS `OrderDate`,
 1 AS `RequiredDate`,
 1 AS `ShippedDate`,
 1 AS `ShipVia`,
 1 AS `Freight`,
 1 AS `ShipName`,
 1 AS `ShipAddress`,
 1 AS `ShipCity`,
 1 AS `ShipRegion`,
 1 AS `ShipPostalCode`,
 1 AS `ShipCountry`,
 1 AS `CompanyName`,
 1 AS `Address`,
 1 AS `City`,
 1 AS `Region`,
 1 AS `PostalCode`,
 1 AS `Country`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `order details extended`
--

DROP TABLE IF EXISTS `order details extended`;
/*!50001 DROP VIEW IF EXISTS `order details extended`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `order details extended` AS SELECT 
 1 AS `OrderID`,
 1 AS `ProductID`,
 1 AS `ProductName`,
 1 AS `UnitPrice`,
 1 AS `Quantity`,
 1 AS `Discount`,
 1 AS `ExtendedPrice`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `order subtotals`
--

DROP TABLE IF EXISTS `order subtotals`;
/*!50001 DROP VIEW IF EXISTS `order subtotals`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `order subtotals` AS SELECT 
 1 AS `OrderID`,
 1 AS `Subtotal`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `sales totals by amount`
--

DROP TABLE IF EXISTS `sales totals by amount`;
/*!50001 DROP VIEW IF EXISTS `sales totals by amount`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `sales totals by amount` AS SELECT 
 1 AS `SaleAmount`,
 1 AS `OrderID`,
 1 AS `CompanyName`,
 1 AS `ShippedDate`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `category sales for 1997`
--

DROP TABLE IF EXISTS `category sales for 1997`;
/*!50001 DROP VIEW IF EXISTS `category sales for 1997`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `category sales for 1997` AS SELECT 
 1 AS `CategoryName`,
 1 AS `CategorySales`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `sales by category`
--

DROP TABLE IF EXISTS `sales by category`;
/*!50001 DROP VIEW IF EXISTS `sales by category`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `sales by category` AS SELECT 
 1 AS `CategoryID`,
 1 AS `CategoryName`,
 1 AS `ProductName`,
 1 AS `ProductSales`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `alphabetical list of products`
--

DROP TABLE IF EXISTS `alphabetical list of products`;
/*!50001 DROP VIEW IF EXISTS `alphabetical list of products`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `alphabetical list of products` AS SELECT 
 1 AS `ProductID`,
 1 AS `ProductName`,
 1 AS `SupplierID`,
 1 AS `CategoryID`,
 1 AS `QuantityPerUnit`,
 1 AS `UnitPrice`,
 1 AS `UnitsInStock`,
 1 AS `UnitsOnOrder`,
 1 AS `ReorderLevel`,
 1 AS `Discontinued`,
 1 AS `CategoryName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `summary of sales by year`
--

DROP TABLE IF EXISTS `summary of sales by year`;
/*!50001 DROP VIEW IF EXISTS `summary of sales by year`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `summary of sales by year` AS SELECT 
 1 AS `ShippedDate`,
 1 AS `OrderID`,
 1 AS `Subtotal`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `quarterly orders`
--

DROP TABLE IF EXISTS `quarterly orders`;
/*!50001 DROP VIEW IF EXISTS `quarterly orders`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `quarterly orders` AS SELECT 
 1 AS `CustomerID`,
 1 AS `CompanyName`,
 1 AS `City`,
 1 AS `Country`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `invoices`
--

DROP TABLE IF EXISTS `invoices`;
/*!50001 DROP VIEW IF EXISTS `invoices`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `invoices` AS SELECT 
 1 AS `ShipName`,
 1 AS `ShipAddress`,
 1 AS `ShipCity`,
 1 AS `ShipRegion`,
 1 AS `ShipPostalCode`,
 1 AS `ShipCountry`,
 1 AS `CustomerID`,
 1 AS `CustomerName`,
 1 AS `Address`,
 1 AS `City`,
 1 AS `Region`,
 1 AS `PostalCode`,
 1 AS `Country`,
 1 AS `Salesperson`,
 1 AS `OrderID`,
 1 AS `OrderDate`,
 1 AS `RequiredDate`,
 1 AS `ShippedDate`,
 1 AS `ShipperName`,
 1 AS `ProductID`,
 1 AS `ProductName`,
 1 AS `UnitPrice`,
 1 AS `Quantity`,
 1 AS `Discount`,
 1 AS `ExtendedPrice`,
 1 AS `Freight`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `current product list`
--

DROP TABLE IF EXISTS `current product list`;
/*!50001 DROP VIEW IF EXISTS `current product list`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `current product list` AS SELECT 
 1 AS `ProductID`,
 1 AS `ProductName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `products above average price`
--

DROP TABLE IF EXISTS `products above average price`;
/*!50001 DROP VIEW IF EXISTS `products above average price`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `products above average price` AS SELECT 
 1 AS `ProductName`,
 1 AS `UnitPrice`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `customer and suppliers by city`
--

DROP TABLE IF EXISTS `customer and suppliers by city`;
/*!50001 DROP VIEW IF EXISTS `customer and suppliers by city`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `customer and suppliers by city` AS SELECT 
 1 AS `City`,
 1 AS `CompanyName`,
 1 AS `ContactName`,
 1 AS `Relationship`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `summary of sales by quarter`
--

DROP TABLE IF EXISTS `summary of sales by quarter`;
/*!50001 DROP VIEW IF EXISTS `summary of sales by quarter`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `summary of sales by quarter` AS SELECT 
 1 AS `ShippedDate`,
 1 AS `OrderID`,
 1 AS `Subtotal`*/;
SET character_set_client = @saved_cs_client;

--
-- Final view structure for view `products by category`
--

/*!50001 DROP VIEW IF EXISTS `products by category`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `products by category` AS select `categories`.`CategoryName` AS `CategoryName`,`products`.`ProductName` AS `ProductName`,`products`.`QuantityPerUnit` AS `QuantityPerUnit`,`products`.`UnitsInStock` AS `UnitsInStock`,`products`.`Discontinued` AS `Discontinued` from (`categories` join `products` on((`categories`.`CategoryID` = `products`.`CategoryID`))) where (`products`.`Discontinued` <> 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `product sales for 1997`
--

/*!50001 DROP VIEW IF EXISTS `product sales for 1997`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `product sales for 1997` AS select `categories`.`CategoryName` AS `CategoryName`,`products`.`ProductName` AS `ProductName`,sum(((((`order details`.`UnitPrice` * `order details`.`Quantity`) * (1 - `order details`.`Discount`)) / 100) * 100)) AS `ProductSales` from (((`categories` join `products` on((`categories`.`CategoryID` = `products`.`CategoryID`))) join `order details` on((`products`.`ProductID` = `order details`.`ProductID`))) join `orders` on((`orders`.`OrderID` = `order details`.`OrderID`))) where (`orders`.`ShippedDate` between '1997-01-01' and '1997-12-31') group by `categories`.`CategoryName`,`products`.`ProductName` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `orders qry`
--

/*!50001 DROP VIEW IF EXISTS `orders qry`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `orders qry` AS select `orders`.`OrderID` AS `OrderID`,`orders`.`CustomerID` AS `CustomerID`,`orders`.`EmployeeID` AS `EmployeeID`,`orders`.`OrderDate` AS `OrderDate`,`orders`.`RequiredDate` AS `RequiredDate`,`orders`.`ShippedDate` AS `ShippedDate`,`orders`.`ShipVia` AS `ShipVia`,`orders`.`Freight` AS `Freight`,`orders`.`ShipName` AS `ShipName`,`orders`.`ShipAddress` AS `ShipAddress`,`orders`.`ShipCity` AS `ShipCity`,`orders`.`ShipRegion` AS `ShipRegion`,`orders`.`ShipPostalCode` AS `ShipPostalCode`,`orders`.`ShipCountry` AS `ShipCountry`,`customers`.`CompanyName` AS `CompanyName`,`customers`.`Address` AS `Address`,`customers`.`City` AS `City`,`customers`.`Region` AS `Region`,`customers`.`PostalCode` AS `PostalCode`,`customers`.`Country` AS `Country` from (`customers` join `orders` on((`customers`.`CustomerID` = `orders`.`CustomerID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `order details extended`
--

/*!50001 DROP VIEW IF EXISTS `order details extended`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `order details extended` AS select `order details`.`OrderID` AS `OrderID`,`order details`.`ProductID` AS `ProductID`,`products`.`ProductName` AS `ProductName`,`order details`.`UnitPrice` AS `UnitPrice`,`order details`.`Quantity` AS `Quantity`,`order details`.`Discount` AS `Discount`,((((`order details`.`UnitPrice` * `order details`.`Quantity`) * (1 - `order details`.`Discount`)) / 100) * 100) AS `ExtendedPrice` from (`products` join `order details` on((`products`.`ProductID` = `order details`.`ProductID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `order subtotals`
--

/*!50001 DROP VIEW IF EXISTS `order subtotals`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `order subtotals` AS select `order details`.`OrderID` AS `OrderID`,sum(((((`order details`.`UnitPrice` * `order details`.`Quantity`) * (1 - `order details`.`Discount`)) / 100) * 100)) AS `Subtotal` from `order details` group by `order details`.`OrderID` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `sales totals by amount`
--

/*!50001 DROP VIEW IF EXISTS `sales totals by amount`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `sales totals by amount` AS select `order subtotals`.`Subtotal` AS `SaleAmount`,`orders`.`OrderID` AS `OrderID`,`customers`.`CompanyName` AS `CompanyName`,`orders`.`ShippedDate` AS `ShippedDate` from ((`customers` join `orders` on((`customers`.`CustomerID` = `orders`.`CustomerID`))) join `order subtotals` on((`orders`.`OrderID` = `order subtotals`.`OrderID`))) where ((`order subtotals`.`Subtotal` > 2500) and (`orders`.`ShippedDate` between '1997-01-01' and '1997-12-31')) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `category sales for 1997`
--

/*!50001 DROP VIEW IF EXISTS `category sales for 1997`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `category sales for 1997` AS select `product sales for 1997`.`CategoryName` AS `CategoryName`,sum(`product sales for 1997`.`ProductSales`) AS `CategorySales` from `product sales for 1997` group by `product sales for 1997`.`CategoryName` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `sales by category`
--

/*!50001 DROP VIEW IF EXISTS `sales by category`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `sales by category` AS select `categories`.`CategoryID` AS `CategoryID`,`categories`.`CategoryName` AS `CategoryName`,`products`.`ProductName` AS `ProductName`,sum(`order details extended`.`ExtendedPrice`) AS `ProductSales` from (((`categories` join `products` on((`categories`.`CategoryID` = `products`.`CategoryID`))) join `order details extended` on((`products`.`ProductID` = `order details extended`.`ProductID`))) join `orders` on((`orders`.`OrderID` = `order details extended`.`OrderID`))) where (`orders`.`OrderDate` between '1997-01-01' and '1997-12-31') group by `categories`.`CategoryID`,`categories`.`CategoryName`,`products`.`ProductName` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `alphabetical list of products`
--

/*!50001 DROP VIEW IF EXISTS `alphabetical list of products`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `alphabetical list of products` AS select `products`.`ProductID` AS `ProductID`,`products`.`ProductName` AS `ProductName`,`products`.`SupplierID` AS `SupplierID`,`products`.`CategoryID` AS `CategoryID`,`products`.`QuantityPerUnit` AS `QuantityPerUnit`,`products`.`UnitPrice` AS `UnitPrice`,`products`.`UnitsInStock` AS `UnitsInStock`,`products`.`UnitsOnOrder` AS `UnitsOnOrder`,`products`.`ReorderLevel` AS `ReorderLevel`,`products`.`Discontinued` AS `Discontinued`,`categories`.`CategoryName` AS `CategoryName` from (`categories` join `products` on((`categories`.`CategoryID` = `products`.`CategoryID`))) where (`products`.`Discontinued` = 0) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `summary of sales by year`
--

/*!50001 DROP VIEW IF EXISTS `summary of sales by year`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `summary of sales by year` AS select `orders`.`ShippedDate` AS `ShippedDate`,`orders`.`OrderID` AS `OrderID`,`order subtotals`.`Subtotal` AS `Subtotal` from (`orders` join `order subtotals` on((`orders`.`OrderID` = `order subtotals`.`OrderID`))) where (`orders`.`ShippedDate` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `quarterly orders`
--

/*!50001 DROP VIEW IF EXISTS `quarterly orders`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `quarterly orders` AS select distinct `customers`.`CustomerID` AS `CustomerID`,`customers`.`CompanyName` AS `CompanyName`,`customers`.`City` AS `City`,`customers`.`Country` AS `Country` from (`customers` join `orders` on((`customers`.`CustomerID` = `orders`.`CustomerID`))) where (`orders`.`OrderDate` between '1997-01-01' and '1997-12-31') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `invoices`
--

/*!50001 DROP VIEW IF EXISTS `invoices`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `invoices` AS select `orders`.`ShipName` AS `ShipName`,`orders`.`ShipAddress` AS `ShipAddress`,`orders`.`ShipCity` AS `ShipCity`,`orders`.`ShipRegion` AS `ShipRegion`,`orders`.`ShipPostalCode` AS `ShipPostalCode`,`orders`.`ShipCountry` AS `ShipCountry`,`orders`.`CustomerID` AS `CustomerID`,`customers`.`CompanyName` AS `CustomerName`,`customers`.`Address` AS `Address`,`customers`.`City` AS `City`,`customers`.`Region` AS `Region`,`customers`.`PostalCode` AS `PostalCode`,`customers`.`Country` AS `Country`,((`employees`.`FirstName` + ' ') + `employees`.`LastName`) AS `Salesperson`,`orders`.`OrderID` AS `OrderID`,`orders`.`OrderDate` AS `OrderDate`,`orders`.`RequiredDate` AS `RequiredDate`,`orders`.`ShippedDate` AS `ShippedDate`,`shippers`.`CompanyName` AS `ShipperName`,`order details`.`ProductID` AS `ProductID`,`products`.`ProductName` AS `ProductName`,`order details`.`UnitPrice` AS `UnitPrice`,`order details`.`Quantity` AS `Quantity`,`order details`.`Discount` AS `Discount`,((((`order details`.`UnitPrice` * `order details`.`Quantity`) * (1 - `order details`.`Discount`)) / 100) * 100) AS `ExtendedPrice`,`orders`.`Freight` AS `Freight` from (((((`customers` join `orders` on((`customers`.`CustomerID` = `orders`.`CustomerID`))) join `employees` on((`employees`.`EmployeeID` = `orders`.`EmployeeID`))) join `order details` on((`orders`.`OrderID` = `order details`.`OrderID`))) join `products` on((`products`.`ProductID` = `order details`.`ProductID`))) join `shippers` on((`shippers`.`ShipperID` = `orders`.`ShipVia`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `current product list`
--

/*!50001 DROP VIEW IF EXISTS `current product list`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `current product list` AS select `products`.`ProductID` AS `ProductID`,`products`.`ProductName` AS `ProductName` from `products` where (`products`.`Discontinued` = 0) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `products above average price`
--

/*!50001 DROP VIEW IF EXISTS `products above average price`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `products above average price` AS select `products`.`ProductName` AS `ProductName`,`products`.`UnitPrice` AS `UnitPrice` from `products` where (`products`.`UnitPrice` > (select avg(`products`.`UnitPrice`) from `products`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `customer and suppliers by city`
--

/*!50001 DROP VIEW IF EXISTS `customer and suppliers by city`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `customer and suppliers by city` AS select `customers`.`City` AS `City`,`customers`.`CompanyName` AS `CompanyName`,`customers`.`ContactName` AS `ContactName`,'Customers' AS `Relationship` from `customers` union select `suppliers`.`City` AS `City`,`suppliers`.`CompanyName` AS `CompanyName`,`suppliers`.`ContactName` AS `ContactName`,'Suppliers' AS `Suppliers` from `suppliers` order by `City`,`CompanyName` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `summary of sales by quarter`
--

/*!50001 DROP VIEW IF EXISTS `summary of sales by quarter`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `summary of sales by quarter` AS select `orders`.`ShippedDate` AS `ShippedDate`,`orders`.`OrderID` AS `OrderID`,`order subtotals`.`Subtotal` AS `Subtotal` from (`orders` join `order subtotals` on((`orders`.`OrderID` = `order subtotals`.`OrderID`))) where (`orders`.`ShippedDate` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-31 12:53:57
