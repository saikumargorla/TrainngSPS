#include <stdio.h>
#include <stdlib.h>

int mul(int x,int y){
    printf("multiplication is:%d",x*y);
	return 0;
}

int sum(int x,int y){
	printf("sum of numbers is:%d\n",x+y);
    return 0;
}

int main(int argc, char *argv[])
{   

	for(int i=1;i<argc;i++){
	printf(argv[i]);
	printf("\n");

	}
    
	sum(atoi(argv[1]),atoi(argv[2]));
	mul(atoi(argv[1]),atoi(argv[2]));
	
	return 0;
}


