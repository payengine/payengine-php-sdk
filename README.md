# PayEngine Payrix PHP

# How to use

When application is starting, call this API

```
PayEngine\PayEngine::enableEmulator();
```

from now on all the requests will go through https://payrix.payengine.co or https://test-payrix.payengine.co (with `Config::setTestMode(true)`)

Stop:

```
PayEngine\PayEngine::disableEmulator();
```
