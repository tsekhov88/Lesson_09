
// вывести номер автомобиля, брэнд автомобиля и имя владельца

SELECT Cars.`number`, Carbrands.name as brand_name, Users.name as user_name
FROM `Cars`
LEFT JOIN Carbrands ON Cars.brand_id = Carbrands.id
LEFT JOIN Users ON Cars.user_id = Users.id



//вывести имя владельца и номер автомобиля.

SELECT 
Users.name as user_name, Cars.`number` 
FROM `Users` 
LEFT JOIN Cars ON Cars.user_id = Users.id 

// для сортировки пользователей данная функция
 ORDER BY `user_name`