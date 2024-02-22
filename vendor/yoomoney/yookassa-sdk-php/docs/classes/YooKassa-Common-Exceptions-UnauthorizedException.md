# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Common\Exceptions\UnauthorizedException
### Namespace: [\YooKassa\Common\Exceptions](../namespaces/yookassa-common-exceptions.md)
---
**Summary:**

[Basic Auth] Неверный идентификатор вашего аккаунта в ЮKassa или секретный ключ (имя пользователя и пароль при аутентификации).

**Description:**

[OAuth 2.0] Невалидный OAuth-токен: он некорректный, устарел или его отозвали. Запросите токен заново.

---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [HTTP_CODE](YooKassa-Common-Exceptions-UnauthorizedException.md#constant_HTTP_CODE) |  |  |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$retryAfter](YooKassa-Common-Exceptions-UnauthorizedException.md#property_retryAfter) |  |  |
| public | [$type](YooKassa-Common-Exceptions-UnauthorizedException.md#property_type) |  |  |
| protected | [$responseBody](YooKassa-Common-Exceptions-ApiException.md#property_responseBody) |  |  |
| protected | [$responseHeaders](YooKassa-Common-Exceptions-ApiException.md#property_responseHeaders) |  |  |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](YooKassa-Common-Exceptions-UnauthorizedException.md#method___construct) |  | Constructor |
| public | [getResponseBody()](YooKassa-Common-Exceptions-ApiException.md#method_getResponseBody) |  |  |
| public | [getResponseHeaders()](YooKassa-Common-Exceptions-ApiException.md#method_getResponseHeaders) |  |  |

---
### Details
* File: [lib/Common/Exceptions/UnauthorizedException.php](../../lib/Common/Exceptions/UnauthorizedException.php)
* Package: YooKassa
* Class Hierarchy:  
  * [\Exception](\Exception)
  * [\YooKassa\Common\Exceptions\ApiException](YooKassa-Common-Exceptions-ApiException.md)
  * \YooKassa\Common\Exceptions\UnauthorizedException

---
## Constants
<a name="constant_HTTP_CODE" class="anchor"></a>
###### HTTP_CODE
```php
HTTP_CODE = 401
```



---
## Properties
<a name="property_retryAfter"></a>
#### public $retryAfter
---

**Details:**


<a name="property_type"></a>
#### public $type
---

**Details:**


<a name="property_responseBody"></a>
#### protected $responseBody : mixed
---
**Type:** <a href="../mixed"><abbr title="mixed">mixed</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Common\Exceptions\ApiException](YooKassa-Common-Exceptions-ApiException.md)


<a name="property_responseHeaders"></a>
#### protected $responseHeaders : string[]
---
**Type:** <a href="../string[]"><abbr title="string[]">string[]</abbr></a>

**Details:**
* Inherited From: [\YooKassa\Common\Exceptions\ApiException](YooKassa-Common-Exceptions-ApiException.md)



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(mixed $responseHeaders = array(), mixed $responseBody = null) : mixed
```

**Summary**

Constructor

**Details:**
* Inherited From: [\YooKassa\Common\Exceptions\UnauthorizedException](YooKassa-Common-Exceptions-UnauthorizedException.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | responseHeaders  | HTTP header |
| <code lang="php">mixed</code> | responseBody  | HTTP body |

**Returns:** mixed - 


<a name="method_getResponseBody" class="anchor"></a>
#### public getResponseBody() : mixed

```php
public getResponseBody() : mixed
```

**Details:**
* Inherited From: [\YooKassa\Common\Exceptions\ApiException](YooKassa-Common-Exceptions-ApiException.md)

**Returns:** mixed - 


<a name="method_getResponseHeaders" class="anchor"></a>
#### public getResponseHeaders() : string[]

```php
public getResponseHeaders() : string[]
```

**Details:**
* Inherited From: [\YooKassa\Common\Exceptions\ApiException](YooKassa-Common-Exceptions-ApiException.md)

**Returns:** string[] - 



---

### Top Namespaces

* [\YooKassa](../namespaces/yookassa.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 1](../reports/markers.md)
* [Deprecated - 35](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2023-08-02 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2023 YooMoney