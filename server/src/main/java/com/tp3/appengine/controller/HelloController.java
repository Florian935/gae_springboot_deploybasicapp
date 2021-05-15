package com.tp3.appengine.controller;

import org.springframework.web.bind.annotation.*;

@RestController
@RequestMapping("/hello")
public class HelloController {

    @GetMapping
    public String greeting() {
        return "Hello World !";
    }

    @PostMapping
    public String greetingName(@RequestBody String name) {
        return new StringBuilder("Hello ")
                .append(name)
                .append(" !")
                .toString();
    }
}
