# [YooKassa API SDK](../home.md)

# Interface: DealInterface
### Namespace: [\YooKassa\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface DealInterface

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getBalance()](YooKassa-Model-DealInterface.md#method_getBalance) |  | Возвращает баланс сделки |
| public | [getCreatedAt()](YooKassa-Model-DealInterface.md#method_getCreatedAt) |  | Возвращает время создания сделки |
| public | [getDescription()](YooKassa-Model-DealInterface.md#method_getDescription) |  | Возвращает описание сделки (не более 128 символов). |
| public | [getExpiresAt()](YooKassa-Model-DealInterface.md#method_getExpiresAt) |  | Возвращает время автоматического закрытия сделки |
| public | [getFeeMoment()](YooKassa-Model-DealInterface.md#method_getFeeMoment) |  | Возвращает момент перечисления вам вознаграждения платформы |
| public | [getId()](YooKassa-Model-DealInterface.md#method_getId) |  | Возвращает Id сделки |
| public | [getMetadata()](YooKassa-Model-DealInterface.md#method_getMetadata) |  | Возвращает дополнительные данные сделки |
| public | [getPayoutBalance()](YooKassa-Model-DealInterface.md#method_getPayoutBalance) |  | Возвращает сумму вознаграждения продавца |
| public | [getStatus()](YooKassa-Model-DealInterface.md#method_getStatus) |  | Возвращает статус сделки |
| public | [getTest()](YooKassa-Model-DealInterface.md#method_getTest) |  | Возвращает признак тестовой операции |
| public | [getType()](YooKassa-Model-DealInterface.md#method_getType) |  | Возвращает тип сделки |

---
### Details
* File: [lib/Model/DealInterface.php](../../lib/Model/DealInterface.php)
* Package: \YooKassa

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property |  | Идентификатор сделки |
| property |  | Статус сделки |
| property |  | Тип сделки |
| property |  | Момент перечисления вознаграждения |
| property |  | Момент перечисления вознаграждения |
| property |  | Описание сделки |
| property |  | Баланс сделки |
| property |  | Сумма вознаграждения продавца |
| property |  | Сумма вознаграждения продавца |
| property |  | Время создания сделки |
| property |  | Время создания сделки |
| property |  | Время автоматического закрытия сделки |
| property |  | Время автоматического закрытия сделки |
| property |  | Дополнительные данные сделки |
| property |  | Признак тестовой операции |

---
## Methods
<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает Id сделки

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** string - Id сделки


<a name="method_getType" class="anchor"></a>
#### public getType() : string

```php
public getType() : string
```

**Summary**

Возвращает тип сделки

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** string - Тип сделки


<a name="method_getFeeMoment" class="anchor"></a>
#### public getFeeMoment() : string

```php
public getFeeMoment() : string
```

**Summary**

Возвращает момент перечисления вам вознаграждения платформы

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** string - Момент перечисления вознаграждения


<a name="method_getDescription" class="anchor"></a>
#### public getDescription() : string

```php
public getDescription() : string
```

**Summary**

Возвращает описание сделки (не более 128 символов).

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** string - Описание сделки


<a name="method_getBalance" class="anchor"></a>
#### public getBalance() : \YooKassa\Model\MonetaryAmount

```php
public getBalance() : \YooKassa\Model\MonetaryAmount
```

**Summary**

Возвращает баланс сделки

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** \YooKassa\Model\MonetaryAmount - Баланс сделки


<a name="method_getPayoutBalance" class="anchor"></a>
#### public getPayoutBalance() : \YooKassa\Model\MonetaryAmount

```php
public getPayoutBalance() : \YooKassa\Model\MonetaryAmount
```

**Summary**

Возвращает сумму вознаграждения продавца

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** \YooKassa\Model\MonetaryAmount - Сумма вознаграждения продавца


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает статус сделки

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** string - Статус сделки


<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает время создания сделки

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** \DateTime - Время создания сделки


<a name="method_getExpiresAt" class="anchor"></a>
#### public getExpiresAt() : \DateTime

```php
public getExpiresAt() : \DateTime
```

**Summary**

Возвращает время автоматического закрытия сделки

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** \DateTime - Время автоматического закрытия сделки


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \YooKassa\Model\Metadata

```php
public getMetadata() : \YooKassa\Model\Metadata
```

**Summary**

Возвращает дополнительные данные сделки

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** \YooKassa\Model\Metadata - Дополнительные данные сделки


<a name="method_getTest" class="anchor"></a>
#### public getTest() : bool

```php
public getTest() : bool
```

**Summary**

Возвращает признак тестовой операции

**Details:**
* Inherited From: [\YooKassa\Model\DealInterface](YooKassa-Model-DealInterface.md)

**Returns:** bool - Признак тестовой операции




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