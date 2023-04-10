#include <bits/stdc++.h>
#define int long long
#define print(x) cout << x << endl;
using namespace std;

signed main()
{
    int t;
    cin >> t;
    while (t--)
    {
        int n;
        cin >> n;
        int temp = n;
        // int N = 2*n;
        int a = 1;
        int b = 2;
        int c = 2 * n;
        // int N = 2*n;
        int d = 2 * n - 1;
        

        int arr[1][n];
        for (int i = 0; i < n; i += 2)
        {
            arr[0][i] = d;
            d -= 2;
            arr[0][i + 1] = a;
            a += 2;
            arr[1][i] = b;
            b += 2;
            arr[1][i + 1] = e;
            e -= 2;
        }

        // for (int i = 0; i < n; i += 2)
        // {
        //     arr[0][i] = d;
        //     d -= 2;
        //     arr[0][i + 1] = a;
        //     a += 2;
        //     arr[1][i] = b;
        //     b += 2;
        //     arr[1][n - i - 1] = c;
        //     c -= 2;
        // }

        for (int i = 0; i < 2; i++)
        {
            for (int j = 0; j < temp; j++)
            {
                cout << arr[i][j] << " ";
            }
            cout << endl;
        }
    }
    return 0;
}