function setCookieAgeWall(value) {
  const getCookie = document.cookie;
  const splitCookie = getCookie.split('; ');
  const cookieSplit = splitCookie[1].split("=")
  cookieSplit[1] = value;
  const stringCookie = cookieSplit.join('=');
  splitCookie.pop();
  splitCookie.push(stringCookie);
  return splitCookie.join('; ');
}

console.log(setCookieAgeWall(false));
