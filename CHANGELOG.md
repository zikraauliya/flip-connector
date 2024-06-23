# Changelog

All notable changes to `flip-connector` will be documented in this file.

## Sunday, 2024-06-23 13:13

    - create transformer:
        - BooleanTransformer
    - setup defaultBody for:
        - CreateBill
        - CreateDisbursement

## Sunday, 2024-06-23 00:25

    - create payload:
        - DisbursementPayload
        - AcceptPaymentPayload
    - create transformer:
        - ImplodeTransformer
    - remove DisbursementCallback as BillObject is sufficient

## Saturday, 2024-06-22 16:30

    - update flip postman collection to 2.1
    - fix styling using laravel pint
    - increase phpstan to level 9
    - install spatie laravel-data
    - add Enum:
        - AcceptPaymentCallbackStatus
        - BankAccountInquiryStatus
        - BankCode
        - BankInfoStatus
        - BankType
        - BillActivationStatus
        - BillPaymentObjectStatus
        - BillPaymentTransactionStatus
        - BillStep
        - BillType
        - DisbursementCancelledReason
        - DisbursementChannel
        - DisbursementDirection
        - DisbursementTransactionStatus
        - PaymentObjectSettlementStatus
        - PaymentObjectStatus
        - SenderBankType
        - SenderIdentityType
        - SenderJob
    - add DTO:
        - AcceptPaymentCallback
        - BankAccount
        - BankInfo
        - BankInquiry
        - BillObject
        - BillPaymentObject
        - CustomerObject
        - DisbursementCallback
        - DisbursementObject
        - PaymentObject
        - SenderObject
