# [YooKassa API SDK](../home.md)

# Class: \YooKassa\Request\Deals\CreateDealRequest
### Namespace: [\YooKassa\Request\Deals](../namespaces/yookassa-request-deals.md)
---
**Summary:**

Класс объекта запроса к API на проведение новой сделки


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$description](YooKassa-Request-Deals-CreateDealRequest.md#property_description) |  | Описание сделки |
| public | [$fee_moment](YooKassa-Request-Deals-CreateDealRequest.md#property_fee_moment) |  | Момент перечисления вам вознаграждения платформы |
| public | [$feeMoment](YooKassa-Request-Deals-CreateDealRequest.md#property_feeMoment) |  | Момент перечисления вам вознаграждения платформы |
| public | [$metadata](YooKassa-Request-Deals-CreateDealRequest.md#property_metadata) |  | Метаданные привязанные к сделке |
| public | [$type](YooKassa-Request-Deals-CreateDealRequest.md#property_type) |  | Тип сделки |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](YooKassa-Common-AbstractObject.md#method___construct) |  | AbstractObject constructor. |
| public | [__get()](YooKassa-Common-AbstractObject.md#method___get) |  | Возвращает значение свойства |
| public | [__isset()](YooKassa-Common-AbstractObject.md#method___isset) |  | Проверяет наличие свойства |
| public | [__set()](YooKassa-Common-AbstractObject.md#method___set) |  | Устанавливает значение свойства |
| public | [__unset()](YooKassa-Common-AbstractObject.md#method___unset) |  | Удаляет свойство |
| public | [builder()](YooKassa-Request-Deals-CreateDealRequest.md#method_builder) |  | Возвращает билдер объектов запросов создания сделки |
| public | [clearValidationError()](YooKassa-Common-AbstractRequest.md#method_clearValidationError) |  | Очищает статус валидации текущего запроса |
| public | [fromArray()](YooKassa-Common-AbstractObject.md#method_fromArray) |  | Устанавливает значения свойств текущего объекта из массива |
| public | [getDescription()](YooKassa-Request-Deals-CreateDealRequest.md#method_getDescription) |  | Возвращает описание сделки |
| public | [getFeeMoment()](YooKassa-Request-Deals-CreateDealRequest.md#method_getFeeMoment) |  | Возвращает момент перечисления вам вознаграждения платформы |
| public | [getLastValidationError()](YooKassa-Common-AbstractRequest.md#method_getLastValidationError) |  | Возвращает последнюю ошибку валидации |
| public | [getMetadata()](YooKassa-Request-Deals-CreateDealRequest.md#method_getMetadata) |  | Возвращает данные оплаты установленные мерчантом |
| public | [getType()](YooKassa-Request-Deals-CreateDealRequest.md#method_getType) |  | Возвращает тип сделки |
| public | [hasDescription()](YooKassa-Request-Deals-CreateDealRequest.md#method_hasDescription) |  | Проверяет наличие описания в создаваемой сделке |
| public | [hasFeeMoment()](YooKassa-Request-Deals-CreateDealRequest.md#method_hasFeeMoment) |  | Проверяет, был ли установлен момент перечисления вознаграждения |
| public | [hasMetadata()](YooKassa-Request-Deals-CreateDealRequest.md#method_hasMetadata) |  | Проверяет, были ли установлены метаданные заказа |
| public | [hasType()](YooKassa-Request-Deals-CreateDealRequest.md#method_hasType) |  | Проверяет наличие типа в создаваемой сделке |
| public | [jsonSerialize()](YooKassa-Common-AbstractObject.md#method_jsonSerialize) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации |
| public | [offsetExists()](YooKassa-Common-AbstractObject.md#method_offsetExists) |  | Проверяет наличие свойства |
| public | [offsetGet()](YooKassa-Common-AbstractObject.md#method_offsetGet) |  | Возвращает значение свойства |
| public | [offsetSet()](YooKassa-Common-AbstractObject.md#method_offsetSet) |  | Устанавливает значение свойства |
| public | [offsetUnset()](YooKassa-Common-AbstractObject.md#method_offsetUnset) |  | Удаляет свойство |
| public | [setDescription()](YooKassa-Request-Deals-CreateDealRequest.md#method_setDescription) |  | Устанавливает описание сделки |
| public | [setFeeMoment()](YooKassa-Request-Deals-CreateDealRequest.md#method_setFeeMoment) |  | Устанавливает момент перечисления вам вознаграждения платформы |
| public | [setMetadata()](YooKassa-Request-Deals-CreateDealRequest.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к платежу |
| public | [setType()](YooKassa-Request-Deals-CreateDealRequest.md#method_setType) |  | Устанавливает тип сделки |
| public | [toArray()](YooKassa-Common-AbstractObject.md#method_toArray) |  | Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации Является алиасом метода AbstractObject::jsonSerialize() |
| public | [validate()](YooKassa-Request-Deals-CreateDealRequest.md#method_validate) |  | Проверяет на валидность текущий объект |
| protected | [getUnknownProperties()](YooKassa-Common-AbstractObject.md#method_getUnknownProperties) |  | Возвращает массив свойств которые не существуют, но были заданы у объекта |
| protected | [setValidationError()](YooKassa-Common-AbstractRequest.md#method_setValidationError) |  | Устанавливает ошибку валидации |

---
### Details
* File: [lib/Request/Deals/CreateDealRequest.php](../../lib/Request/Deals/CreateDealRequest.php)
* Package: YooKassa
* Class Hierarchy:  
  * [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)
  * [\YooKassa\Common\AbstractRequest](YooKassa-Common-AbstractRequest.md)
  * \YooKassa\Request\Deals\CreateDealRequest
* Implements:
  * [\YooKassa\Request\Deals\CreateDealRequestInterface](YooKassa-Request-Deals-CreateDealRequestInterface.md)

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| todo: |  | @example 02-builder.php 11 78 Пример использования билдера |

---
## Properties
<a name="property_description"></a>
#### public $description : string
---
***Description***

Описание сделки

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_fee_moment"></a>
#### public $fee_moment : string
---
***Description***

Момент перечисления вам вознаграждения платформы

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_feeMoment"></a>
#### public $feeMoment : string
---
***Description***

Момент перечисления вам вознаграждения платформы

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**


<a name="property_metadata"></a>
#### public $metadata : \YooKassa\Model\Metadata
---
***Description***

Метаданные привязанные к сделке

**Type:** <a href="../classes/YooKassa-Model-Metadata.html"><abbr title="\YooKassa\Model\Metadata">Metadata</abbr></a>

**Details:**


<a name="property_type"></a>
#### public $type : string
---
***Description***

Тип сделки

**Type:** <a href="../string"><abbr title="string">string</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(array $data = array()) : mixed
```

**Summary**

AbstractObject constructor.

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  |  |

**Returns:** mixed - 


<a name="method___get" class="anchor"></a>
#### public __get() : mixed

```php
public __get(string $propertyName) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method___isset" class="anchor"></a>
#### public __isset() : bool

```php
public __isset(string $propertyName) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method___set" class="anchor"></a>
#### public __set() : mixed

```php
public __set(string $propertyName, mixed $value) : mixed
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** mixed - 


<a name="method___unset" class="anchor"></a>
#### public __unset() : mixed

```php
public __unset(string $propertyName) : mixed
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | propertyName  | Имя удаляемого свойства |

**Returns:** mixed - 


<a name="method_builder" class="anchor"></a>
#### public builder() : \YooKassa\Request\Deals\CreateDealRequestBuilder

```php
Static public builder() : \YooKassa\Request\Deals\CreateDealRequestBuilder
```

**Summary**

Возвращает билдер объектов запросов создания сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** \YooKassa\Request\Deals\CreateDealRequestBuilder - Инстанс билдера объектов запросов


<a name="method_clearValidationError" class="anchor"></a>
#### public clearValidationError() : mixed

```php
public clearValidationError() : mixed
```

**Summary**

Очищает статус валидации текущего запроса

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequest](YooKassa-Common-AbstractRequest.md)

**Returns:** mixed - 


<a name="method_fromArray" class="anchor"></a>
#### public fromArray() : mixed

```php
public fromArray(array|\Traversable $sourceArray) : mixed
```

**Summary**

Устанавливает значения свойств текущего объекта из массива

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | sourceArray  | Ассоциативный массив с настройками |

**Returns:** mixed - 


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** string - 


<a name="method_getFeeMoment" class="anchor"></a>
#### public getFeeMoment() : string

```php
public getFeeMoment() : string
```

**Summary**

Возвращает момент перечисления вам вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** string - Момент перечисления вам вознаграждения платформы


<a name="method_getLastValidationError" class="anchor"></a>
#### public getLastValidationError() : string

```php
public getLastValidationError() : string
```

**Summary**

Возвращает последнюю ошибку валидации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequest](YooKassa-Common-AbstractRequest.md)

**Returns:** string - Последняя произошедшая ошибка валидации


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает данные оплаты установленные мерчантом

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** \YooKassa\Model\Metadata - Метаданные, привязанные к платежу


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** string - Тип сделки


<a name="method_hasDescription" class="anchor"></a>
#### public hasDescription() : bool

```php
public hasDescription() : bool
```

**Summary**

Проверяет наличие описания в создаваемой сделке

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** bool - True если описание сделки есть, false если нет


<a name="method_hasFeeMoment" class="anchor"></a>
#### public hasFeeMoment() : bool

```php
public hasFeeMoment() : bool
```

**Summary**

Проверяет, был ли установлен момент перечисления вознаграждения

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** bool - True если момент перечисления был установлен, false если нет


<a name="method_hasMetadata" class="anchor"></a>
#### public hasMetadata() : bool

```php
public hasMetadata() : bool
```

**Summary**

Проверяет, были ли установлены метаданные заказа

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** bool - True если метаданные были установлены, false если нет


<a name="method_hasType" class="anchor"></a>
#### public hasType() : bool

```php
public hasType() : bool
```

**Summary**

Проверяет наличие типа в создаваемой сделке

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** bool - True если тип сделки есть, false если нет


<a name="method_jsonSerialize" class="anchor"></a>
#### public jsonSerialize() : array

```php
public jsonSerialize() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_offsetExists" class="anchor"></a>
#### public offsetExists() : bool

```php
public offsetExists(string $offset) : bool
```

**Summary**

Проверяет наличие свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя проверяемого свойства |

**Returns:** bool - True если свойство имеется, false если нет


<a name="method_offsetGet" class="anchor"></a>
#### public offsetGet() : mixed

```php
public offsetGet(string $offset) : mixed
```

**Summary**

Возвращает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |

**Returns:** mixed - Значение свойства


<a name="method_offsetSet" class="anchor"></a>
#### public offsetSet() : void

```php
public offsetSet(string $offset, mixed $value) : void
```

**Summary**

Устанавливает значение свойства

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя свойства |
| <code lang="php">mixed</code> | value  | Значение свойства |

**Returns:** void - 


<a name="method_offsetUnset" class="anchor"></a>
#### public offsetUnset() : void

```php
public offsetUnset(string $offset) : void
```

**Summary**

Удаляет свойство

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | offset  | Имя удаляемого свойства |

**Returns:** void - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : mixed

```php
public setDescription(string $value) : mixed
```

**Summary**

Устанавливает описание сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  |  |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** mixed - 


<a name="method_setFeeMoment" class="anchor"></a>
#### public setFeeMoment() : mixed

```php
public setFeeMoment(string $value) : mixed
```

**Summary**

Устанавливает момент перечисления вам вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Момент перечисления вам вознаграждения платформы |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если переданный аргумент не является строкой |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если переданный аргумент не из списка FeeMoment |

**Returns:** mixed - 


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : mixed

```php
public setMetadata(\YooKassa\Model\Metadata|array|null $value) : mixed
```

**Summary**

Устанавливает метаданные, привязанные к платежу

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\YooKassa\Model\Metadata OR array OR null</code> | value  | Метаданные платежа, устанавливаемые мерчантом |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданные данные не удалось интерпретировать как метаданные платежа |

**Returns:** mixed - 


<a name="method_setType" class="anchor"></a>
#### public setType() : mixed

```php
public setType(string $value) : mixed
```

**Summary**

Устанавливает тип сделки

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип сделки |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \YooKassa\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если переданный аргумент не является строкой |
| \YooKassa\Common\Exceptions\InvalidPropertyValueException | Генерируется если переданный аргумент не из списка DealType |

**Returns:** mixed - 


<a name="method_toArray" class="anchor"></a>
#### public toArray() : array

```php
public toArray() : array
```

**Summary**

Возвращает ассоциативный массив со свойствами текущего объекта для его дальнейшей JSON сериализации
Является алиасом метода AbstractObject::jsonSerialize()

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив со свойствами текущего объекта


<a name="method_validate" class="anchor"></a>
#### public validate() : bool

```php
public validate() : bool
```

**Summary**

Проверяет на валидность текущий объект

**Details:**
* Inherited From: [\YooKassa\Request\Deals\CreateDealRequest](YooKassa-Request-Deals-CreateDealRequest.md)

**Returns:** bool - True если объект запроса валиден, false если нет


<a name="method_getUnknownProperties" class="anchor"></a>
#### protected getUnknownProperties() : array

```php
protected getUnknownProperties() : array
```

**Summary**

Возвращает массив свойств которые не существуют, но были заданы у объекта

**Details:**
* Inherited From: [\YooKassa\Common\AbstractObject](YooKassa-Common-AbstractObject.md)

**Returns:** array - Ассоциативный массив с не существующими у текущего объекта свойствами


<a name="method_setValidationError" class="anchor"></a>
#### protected setValidationError() : mixed

```php
protected setValidationError(string $value) : mixed
```

**Summary**

Устанавливает ошибку валидации

**Details:**
* Inherited From: [\YooKassa\Common\AbstractRequest](YooKassa-Common-AbstractRequest.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ошибка, произошедшая при валидации объекта |

**Returns:** mixed - 



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