# .env
Basic .env file with minimum vars to work  
```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:6fOHnFyJxD6Fkh0b9+Gg+Vaojhh2Voth+4tqpEqp3G8=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test-app-db
DB_USERNAME=test-root
DB_PASSWORD=TestAppR00t

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

# postman collection
Postman collection used to test api
```
{
	"info": {
		"_postman_id": "4b5718a6-cbec-d9b9-3f11-0ded0443c891",
		"name": "TestApp",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json"
	},
	"item": [
		{
			"name": "Posts",
			"item": [
				{
					"name": "Get one",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFlZmI1M2Y5OWMzMjVhMWNlZDg2YWUzMGQ3OTA3YTllYTlhZmRlMzAxMjdlY2E0MmM0OTg1MDg1NWU3MzE0NjczYzIzYzY1MzAyNzEyNGY4In0.eyJhdWQiOiIzIiwianRpIjoiYWVmYjUzZjk5YzMyNWExY2VkODZhZTMwZDc5MDdhOWVhOWFmZGUzMDEyN2VjYTQyYzQ5ODUwODU1ZTczMTQ2NzNjMjNjNjUzMDI3MTI0ZjgiLCJpYXQiOjE1NzA1OTY5NDUsIm5iZiI6MTU3MDU5Njk0NSwiZXhwIjoxNjAyMjE5MzQ1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.S7iRB7k2e8HZIMd2zV1mW0cITTZOJdumC3P0O6FlixAufoZVWgpgmlYrKKEQBk03PnYYfjicDcKIPfKOh0kiZ0jjRC7VVW9IpzRsrCNLQUnJM4JRJ_1xeDjucLcufWYiXSkRRNqZh6M_kEfm1luvUEeQzDogm3J8pOs2Hq0pKYtbCVGBFAPrjv2gCf2130n7mTM-xaNvA8ElyX-fUKi40D4SAlqQ9H5bhnsy3-wRVQ7x3SAaPoalf8o7eu8SOalUhn_oPPs0zO9H6-v1pZ32LJ3yYQG47RGB_4LHIzZUJaurrIWMcQnvtsbWn0SaYs7Ypa6xQ9PfCVkC4-hvJJePtwN9RHSYIph-5w7E7XdJ2MmrWdFSzbXE93QdXkyLE3zrfx7MdCcaJPJ9j2_oe5X3VEe_2kDIKs-z_OwO4avBTF8j70wAAs-CoW6AH_ACRBmojMbZl3zClmZPjUuYL0Zpf84tNVH7pj91HxyjTRxp39T1VcysHqjGx6GMQbuSYoF7ybYxe0jdGNGJnU47An1j_SesNuLdxvX8oeQo1f5JbX1kiL2ufmBNdaTN_1L1llUom2omN6urvqziif6vxqnAUzUH1FSuzOc0XyzmgSwkk5FdkA2QA0YxZEcix3HMgMnh9xdwWPYPogCFe0q8RF4FFJkSgcq3oiXeIPDorkTUQsE",
									"type": "string"
								}
							]
						},
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"type": "text",
								"value": "application/json"
							}
						],
						"url": {
							"raw": "http://localhost:8000/api/posts/1",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"api",
								"posts",
								"1"
							]
						}
					},
					"response": []
				},
				{
					"name": "Edit",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJlZDMwNDliZWIwNDIyMTVmNzI1Y2ZlZDJjZjZlNTEzNGQ0OTczODhlM2RhYmMzODc1ZGQ2Y2YzMjNmOWRkYjU5ZjRkM2Q1MTUwOWZkMTMwIn0.eyJhdWQiOiIzIiwianRpIjoiMmVkMzA0OWJlYjA0MjIxNWY3MjVjZmVkMmNmNmU1MTM0ZDQ5NzM4OGUzZGFiYzM4NzVkZDZjZjMyM2Y5ZGRiNTlmNGQzZDUxNTA5ZmQxMzAiLCJpYXQiOjE1NzA1OTkwODksIm5iZiI6MTU3MDU5OTA4OSwiZXhwIjoxNjAyMjIxNDg5LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.GAZlN7f2_a_JBtsF0wZxNHbtd6vw-aEm7c28dsck9e-GvQPasgkkyVrLXu_ORB5bVZUSeQreHJxKUItehpq3z-_oKRDgGety4SJR1nLoQJKFwPYWCbfQ-8FlI9hCDg9lOq3dxJR1v1Y9qPpP-w25Abcb5Vnf5KGMUN5uM01wOZ_EHmPh03C896kZWIEjyJJgu_c-gxj0WALc6xcT7C0RpdZZDEtv2hfUxEqPRC69LlAsXrsnZgiYpbKzi-_oL1yzdI6yMSBrV2jvwDRxYk00lEQsZRf9PCgYQidR3aui1b2-x0pcFdv97KwO4VYM2V9S7lbvnZvMxLw5L1Rr6fx7cDiADtfNuehwUjycH2acH79a3TSIlSDlGkgMfOscqiC6C-vNxGoG4vOjst94jreLwn54qrncshREOHrXCIiak3Hz0P8wze5TJKyA8gONOTvVTl_Fx4QU88cgAIRdTmCrdj0Ix88d_qknOHNhxpofpUZwLjkYnuq6ps4R42jsQi8J5Pzk-GmfrXazh3ib-H2S_3pDKNdoZqf0OLVOS54mqiqjTv-VO46zFLVPtjHLH7Kibwy4vp3h0_Zd0pcA5trA5ETAtxXsv_KqVSJwDPfBUlyQcDHOfYg-m3CAp9Dv8LY3nHnF8ROyzUSaVF9WkpM1mFlNDrr5VUa3kJhpj8ZfVvY",
									"type": "string"
								}
							]
						},
						"method": "PUT",
						"header": [
							{
								"key": "Content-Type",
								"name": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\n\t\"title\": \"TestPost\",\n\t\"content\": \"Content of the test post\"\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "http://localhost:8000/api/posts/1",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"api",
								"posts",
								"1"
							]
						}
					},
					"response": []
				},
				{
					"name": "Delete",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFlZmI1M2Y5OWMzMjVhMWNlZDg2YWUzMGQ3OTA3YTllYTlhZmRlMzAxMjdlY2E0MmM0OTg1MDg1NWU3MzE0NjczYzIzYzY1MzAyNzEyNGY4In0.eyJhdWQiOiIzIiwianRpIjoiYWVmYjUzZjk5YzMyNWExY2VkODZhZTMwZDc5MDdhOWVhOWFmZGUzMDEyN2VjYTQyYzQ5ODUwODU1ZTczMTQ2NzNjMjNjNjUzMDI3MTI0ZjgiLCJpYXQiOjE1NzA1OTY5NDUsIm5iZiI6MTU3MDU5Njk0NSwiZXhwIjoxNjAyMjE5MzQ1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.S7iRB7k2e8HZIMd2zV1mW0cITTZOJdumC3P0O6FlixAufoZVWgpgmlYrKKEQBk03PnYYfjicDcKIPfKOh0kiZ0jjRC7VVW9IpzRsrCNLQUnJM4JRJ_1xeDjucLcufWYiXSkRRNqZh6M_kEfm1luvUEeQzDogm3J8pOs2Hq0pKYtbCVGBFAPrjv2gCf2130n7mTM-xaNvA8ElyX-fUKi40D4SAlqQ9H5bhnsy3-wRVQ7x3SAaPoalf8o7eu8SOalUhn_oPPs0zO9H6-v1pZ32LJ3yYQG47RGB_4LHIzZUJaurrIWMcQnvtsbWn0SaYs7Ypa6xQ9PfCVkC4-hvJJePtwN9RHSYIph-5w7E7XdJ2MmrWdFSzbXE93QdXkyLE3zrfx7MdCcaJPJ9j2_oe5X3VEe_2kDIKs-z_OwO4avBTF8j70wAAs-CoW6AH_ACRBmojMbZl3zClmZPjUuYL0Zpf84tNVH7pj91HxyjTRxp39T1VcysHqjGx6GMQbuSYoF7ybYxe0jdGNGJnU47An1j_SesNuLdxvX8oeQo1f5JbX1kiL2ufmBNdaTN_1L1llUom2omN6urvqziif6vxqnAUzUH1FSuzOc0XyzmgSwkk5FdkA2QA0YxZEcix3HMgMnh9xdwWPYPogCFe0q8RF4FFJkSgcq3oiXeIPDorkTUQsE",
									"type": "string"
								}
							]
						},
						"method": "DELETE",
						"header": [
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"url": {
							"raw": "http://localhost:8000/api/posts/1",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"api",
								"posts",
								"1"
							]
						}
					},
					"response": []
				},
				{
					"name": "Get all",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImFlZmI1M2Y5OWMzMjVhMWNlZDg2YWUzMGQ3OTA3YTllYTlhZmRlMzAxMjdlY2E0MmM0OTg1MDg1NWU3MzE0NjczYzIzYzY1MzAyNzEyNGY4In0.eyJhdWQiOiIzIiwianRpIjoiYWVmYjUzZjk5YzMyNWExY2VkODZhZTMwZDc5MDdhOWVhOWFmZGUzMDEyN2VjYTQyYzQ5ODUwODU1ZTczMTQ2NzNjMjNjNjUzMDI3MTI0ZjgiLCJpYXQiOjE1NzA1OTY5NDUsIm5iZiI6MTU3MDU5Njk0NSwiZXhwIjoxNjAyMjE5MzQ1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.S7iRB7k2e8HZIMd2zV1mW0cITTZOJdumC3P0O6FlixAufoZVWgpgmlYrKKEQBk03PnYYfjicDcKIPfKOh0kiZ0jjRC7VVW9IpzRsrCNLQUnJM4JRJ_1xeDjucLcufWYiXSkRRNqZh6M_kEfm1luvUEeQzDogm3J8pOs2Hq0pKYtbCVGBFAPrjv2gCf2130n7mTM-xaNvA8ElyX-fUKi40D4SAlqQ9H5bhnsy3-wRVQ7x3SAaPoalf8o7eu8SOalUhn_oPPs0zO9H6-v1pZ32LJ3yYQG47RGB_4LHIzZUJaurrIWMcQnvtsbWn0SaYs7Ypa6xQ9PfCVkC4-hvJJePtwN9RHSYIph-5w7E7XdJ2MmrWdFSzbXE93QdXkyLE3zrfx7MdCcaJPJ9j2_oe5X3VEe_2kDIKs-z_OwO4avBTF8j70wAAs-CoW6AH_ACRBmojMbZl3zClmZPjUuYL0Zpf84tNVH7pj91HxyjTRxp39T1VcysHqjGx6GMQbuSYoF7ybYxe0jdGNGJnU47An1j_SesNuLdxvX8oeQo1f5JbX1kiL2ufmBNdaTN_1L1llUom2omN6urvqziif6vxqnAUzUH1FSuzOc0XyzmgSwkk5FdkA2QA0YxZEcix3HMgMnh9xdwWPYPogCFe0q8RF4FFJkSgcq3oiXeIPDorkTUQsE",
									"type": "string"
								}
							]
						},
						"method": "GET",
						"header": [
							{
								"key": "Accept",
								"type": "text",
								"value": "application/json"
							}
						],
						"url": {
							"raw": "http://localhost:8000/api/posts",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"api",
								"posts"
							]
						}
					},
					"response": []
				},
				{
					"name": "Create",
					"request": {
						"auth": {
							"type": "bearer",
							"bearer": [
								{
									"key": "token",
									"value": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJlZDMwNDliZWIwNDIyMTVmNzI1Y2ZlZDJjZjZlNTEzNGQ0OTczODhlM2RhYmMzODc1ZGQ2Y2YzMjNmOWRkYjU5ZjRkM2Q1MTUwOWZkMTMwIn0.eyJhdWQiOiIzIiwianRpIjoiMmVkMzA0OWJlYjA0MjIxNWY3MjVjZmVkMmNmNmU1MTM0ZDQ5NzM4OGUzZGFiYzM4NzVkZDZjZjMyM2Y5ZGRiNTlmNGQzZDUxNTA5ZmQxMzAiLCJpYXQiOjE1NzA1OTkwODksIm5iZiI6MTU3MDU5OTA4OSwiZXhwIjoxNjAyMjIxNDg5LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.GAZlN7f2_a_JBtsF0wZxNHbtd6vw-aEm7c28dsck9e-GvQPasgkkyVrLXu_ORB5bVZUSeQreHJxKUItehpq3z-_oKRDgGety4SJR1nLoQJKFwPYWCbfQ-8FlI9hCDg9lOq3dxJR1v1Y9qPpP-w25Abcb5Vnf5KGMUN5uM01wOZ_EHmPh03C896kZWIEjyJJgu_c-gxj0WALc6xcT7C0RpdZZDEtv2hfUxEqPRC69LlAsXrsnZgiYpbKzi-_oL1yzdI6yMSBrV2jvwDRxYk00lEQsZRf9PCgYQidR3aui1b2-x0pcFdv97KwO4VYM2V9S7lbvnZvMxLw5L1Rr6fx7cDiADtfNuehwUjycH2acH79a3TSIlSDlGkgMfOscqiC6C-vNxGoG4vOjst94jreLwn54qrncshREOHrXCIiak3Hz0P8wze5TJKyA8gONOTvVTl_Fx4QU88cgAIRdTmCrdj0Ix88d_qknOHNhxpofpUZwLjkYnuq6ps4R42jsQi8J5Pzk-GmfrXazh3ib-H2S_3pDKNdoZqf0OLVOS54mqiqjTv-VO46zFLVPtjHLH7Kibwy4vp3h0_Zd0pcA5trA5ETAtxXsv_KqVSJwDPfBUlyQcDHOfYg-m3CAp9Dv8LY3nHnF8ROyzUSaVF9WkpM1mFlNDrr5VUa3kJhpj8ZfVvY",
									"type": "string"
								}
							]
						},
						"method": "POST",
						"header": [
							{
								"key": "Content-Type",
								"name": "Content-Type",
								"value": "application/json",
								"type": "text"
							},
							{
								"key": "Accept",
								"value": "application/json",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\n\t\"title\": \"TestPost\",\n\t\"content\": \"Content of the test post\"\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "http://localhost:8000/api/posts",
							"protocol": "http",
							"host": [
								"localhost"
							],
							"port": "8000",
							"path": [
								"api",
								"posts"
							]
						}
					},
					"response": []
				}
			],
			"protocolProfileBehavior": {}
		},
		{
			"name": "http://localhost:8000/api/register",
			"request": {
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					},
					{
						"key": "Accept",
						"value": "application/json",
						"type": "text"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n\t\"name\": \"Gerardo2\",\n\t\"email\": \"gerardo2@test.com\",\n\t\"password\": \"testpass2\"\n}"
				},
				"url": {
					"raw": "http://localhost:8000/api/register",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"register"
					]
				}
			},
			"response": []
		},
		{
			"name": "http://localhost:8000/api/login",
			"request": {
				"method": "POST",
				"header": [
					{
						"key": "Content-Type",
						"value": "application/json"
					},
					{
						"key": "Accept",
						"value": "application/json",
						"type": "text"
					}
				],
				"body": {
					"mode": "raw",
					"raw": "{\n\t\"email\": \"gerardo2@test.com\",\n\t\"password\": \"testpass2\"\n}"
				},
				"url": {
					"raw": "http://localhost:8000/api/login",
					"protocol": "http",
					"host": [
						"localhost"
					],
					"port": "8000",
					"path": [
						"api",
						"login"
					]
				}
			},
			"response": []
		}
	],
    "protocolProfileBehavior": {}
}
```

