# 封包查詢工具

## v1.0.0

### Features

- 查詢 MySQL 原始封包資料
- 支援三種格式 LOG、DATA、CHK
- 深 / 淺色模式
- 異常狀態標記
  1. AB 點
  2. 定位失效
  3. 補傳
  4. 熄火
- 異常數據統計
  1. 封包數 / 資料總筆數
  2. AB 點次數
  3. 定位失效次數 / 比率
  4. 補傳次數 / 比率
  5. 掉包率
- 掉包率明細
  1. 啟動 / 熄火趟次
  2. 趟次區段時間
  3. 預期資料筆數
  4. 實際資料筆數
  5. 差異筆數 / 資料遺失率

## v1.1.0

### Features

- 新增狀態：
  1. ACC ON 無車速
  2. 30 筆明細
- 新增統計：ACC ON 無車速次數 / 比率
- 支援封包資料展開 30 筆明細

## v1.1.1

### Bug Fixes

- 可選擇查詢不同資料庫
- 資料表命名統一
- LOG 改取第 30 秒資料作為封包代表
- DATA 事件訊息忽略結束字元 #
- 兩筆封包時間重複時保留第一包
- AB 點異常改以第 30 秒 ACC 判斷