
#include <stdio.h>
#include <string.h>
int main()
{   char a[10],b[10];
	printf("enter a string :");
	scanf("%s",&a);
		printf("enter another string :");
	scanf("%s",&b);
	printf("%s",strcat(a,b));
}

/*
#include<stdio.h>
#include<string.h>
int main(){
int i;
//char c[10];
printf("Enter number\n");
scanf("%d",&i);
(i%2==0)?printf("even"):printf("odd");
//printf("%s", c);
}
*/