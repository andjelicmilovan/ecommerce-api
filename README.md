# Project: Ecommerce-api

## End-point: Create Auth Token
Used to get auth token
### Method: POST
>```
>localhost:8000/oauth/token
>```
### Body (**raw**)

```json
{
	"grant_type" : "password",
	"client_id" : "2",
	"client_secret" : "GUm4gSIQFLNG6zOMzU0lTtkXDiSfUoNYghsSYQoe",
	"username" : "marcia.schuppe@example.com",
	"password" : "secret"
}
```


⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get All Products
Request to get all products
### Method: GET
>```
>http://localhost:8000/api/products
>```

⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Create Product
### Method: POST
>```
>http://localhost:8000/api/products/
>```
### Body (**raw**)

```json
{
	"name" : "Iphone X",
	"description" : "Super Retina in two sizes — including the largest display ever on an iPhone. Even faster Face ID. The smartest, most powerful chip in a smartphone. And a breakthrough dual-camera system. iPhone XS is everything you love about iPhone. Taken to the extreme.",
	"price" : 10000,
	"stock" : 10,
	"discount" : 15
}
```

### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiNTc4Y2ZhNThjYTFkMWJlZmI3ZTRhNzdmNGJkNjNmYjYzZjQzOWJlM2JmMGFiNzRmYThmYTU5OWI4MDQ0NDRlZjVkYjg4M2M4YjY3MDJmZTMiLCJpYXQiOjE2Njg4NTM0OTcuMDkxNTk0LCJuYmYiOjE2Njg4NTM0OTcuMDkxNTk2LCJleHAiOjE3MDAzODk0OTcuMDg1NjYsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.cSE7WL7Rh8pd1JevRNx4LMrrOXQGRXPIS3PgjjB-kb0KzZcsPbvP_zPLUInaUEbvqOZnOlfagsggX1vCGLCMBUtwRHsSjPQ-J_OZGVAR1IwTpcA44ehMaz5aLIdSaPXLr-E-YOmx1RGvhllXJfYmZMfDGwwgjzz9eoI2KNwqtVKd6lb-Hrq_Z3a2kCSin5XeXtHls3JMUXE43FK775XiUHaRMOFDxxnjKM0FTKxCGOXt7QKANZ9kLWKaDx69KONvs4WslOWamClqrUoMvvxhY808j2Djxd8OCyZ8_RWd135GEgV3iSPOJVvbwMDYHWeuD-mTiCQPrhUGWOC0y-GScZXuWXu-v4nm5qznDR22PRDcEqleknTVr4tSroDbsv__JniB01fu3WDrCNxxk8yWx0EKcNbCsgky3HDy6T5olQOcxNlJDOxWxScAQEmzJc9G2ftYZjDU2fGA4GBXXP83W3bTeCJW1QR8CMMSKJALfaOONiBA3Ohommjxh-FpJXfXPznZZIEItRT-Bd8ag1rrafOH7Ef6KiXFUgo1UJKrvGUKDSoMp9csUBrR8TPf6R4PHgs9psTAVd20bvalshho91WOxOZ8LgOdbYkiVpq8aErruqdS3kL2lHUFQ5NXXKYndRZABPUJsanRxXM1zU9eBhHNQ5PKMeKiFWjLt359OF0|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Get Categories
### Method: GET
>```
>http://localhost:8000/api/categories
>```

⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃

## End-point: Create Category
### Method: POST
>```
>http://localhost:8000/api/categories
>```
### Headers

|Content-Type|Value|
|---|---|
|Accept|application/json|


### Body (**raw**)

```json
{
	"name" : "Notebooks",
	"description" : "New and used laptops"

}
```

### 🔑 Authentication bearer

|Param|value|Type|
|---|---|---|
|token|eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIyIiwianRpIjoiNTc4Y2ZhNThjYTFkMWJlZmI3ZTRhNzdmNGJkNjNmYjYzZjQzOWJlM2JmMGFiNzRmYThmYTU5OWI4MDQ0NDRlZjVkYjg4M2M4YjY3MDJmZTMiLCJpYXQiOjE2Njg4NTM0OTcuMDkxNTk0LCJuYmYiOjE2Njg4NTM0OTcuMDkxNTk2LCJleHAiOjE3MDAzODk0OTcuMDg1NjYsInN1YiI6IjEiLCJzY29wZXMiOltdfQ.cSE7WL7Rh8pd1JevRNx4LMrrOXQGRXPIS3PgjjB-kb0KzZcsPbvP_zPLUInaUEbvqOZnOlfagsggX1vCGLCMBUtwRHsSjPQ-J_OZGVAR1IwTpcA44ehMaz5aLIdSaPXLr-E-YOmx1RGvhllXJfYmZMfDGwwgjzz9eoI2KNwqtVKd6lb-Hrq_Z3a2kCSin5XeXtHls3JMUXE43FK775XiUHaRMOFDxxnjKM0FTKxCGOXt7QKANZ9kLWKaDx69KONvs4WslOWamClqrUoMvvxhY808j2Djxd8OCyZ8_RWd135GEgV3iSPOJVvbwMDYHWeuD-mTiCQPrhUGWOC0y-GScZXuWXu-v4nm5qznDR22PRDcEqleknTVr4tSroDbsv__JniB01fu3WDrCNxxk8yWx0EKcNbCsgky3HDy6T5olQOcxNlJDOxWxScAQEmzJc9G2ftYZjDU2fGA4GBXXP83W3bTeCJW1QR8CMMSKJALfaOONiBA3Ohommjxh-FpJXfXPznZZIEItRT-Bd8ag1rrafOH7Ef6KiXFUgo1UJKrvGUKDSoMp9csUBrR8TPf6R4PHgs9psTAVd20bvalshho91WOxOZ8LgOdbYkiVpq8aErruqdS3kL2lHUFQ5NXXKYndRZABPUJsanRxXM1zU9eBhHNQ5PKMeKiFWjLt359OF0|string|



⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃ ⁃
_________________________________________________
Powered By: [postman-to-markdown](https://github.com/bautistaj/postman-to-markdown/)
