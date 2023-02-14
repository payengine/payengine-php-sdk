# PayEngine Payrix PHP

# How to use

When application is starting, call this API

```
PayEngine\PayEngine::enableEmulator($mode);
```

Available `$mode`

-   PayEngine\EmulatorMode::PAYRIX
-   PayEngine\EmulatorMode::STRIPE
-   PayEngine\EmulatorMode::BOTH

Stop:

```
PayEngine\PayEngine::disableEmulator();
```
