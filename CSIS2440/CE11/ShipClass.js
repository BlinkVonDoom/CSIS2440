/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ship {
  Name
  Speed
  HardPoints
  Cargo
  Cost
  Image
  Armor

  constructor(n, s, h, c, co, i) {
    this.Name = n
    this.Speed = s
    this.HardPoints = h
    this.Cargo = c
    this.Cost = co
    this.Image = i
    this.Armor = 100
  }

  DisplayShip(divTag) {
    divTag.innerHTML = ''
    let displayString = `<table><tr><td>Name</td><td>${this.Name}</td></tr>`
    displayString += `<tr><td>Speed</td><td>${this.Speed}</td></tr>`
    displayString += `<tr><td>Weapon HardPoints</td><td>${this.HardPoints}</td></tr>`
    displayString += `<tr><td>Cargo Space</td><td>${this.Cargo}</td></tr>`
    displayString += `<tr><td>Armor</td><td>${this.Armor}</td></tr>`
    displayString += `<tr><td colspan='2'><img src='imgs/${this.Image}' alt=''></td></tr>`
    
    divTag.innerHTML = displayString
    return true;
  }
}
