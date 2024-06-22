# Changelog

All notable changes to `flip-connector` will be documented in this file.

## Saturday, 2024-06-22

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
