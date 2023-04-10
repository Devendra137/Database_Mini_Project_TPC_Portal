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
        int arr[2][n];
        int c = 2 * n;
        int d = (2 * n) - 1;
        int a = 1;
        int b = 2;
        for (int i = 0; i < n; i += 2)
        {
            arr[0][i] = d;

            // cout << "d is" << d << endl;
            d -= 2;
            arr[0][i + 1] = a;
            // cout << "a is" << a << endl;
            a += 2;
        }
        for (int i = n - 1; i >= 0; i -= 2)
        {
            arr[1][i] = c;
            // cout << "c is" << c << endl;
            c -= 2;

            arr[1][i - 1] = b;
            // cout << "b is" << b << endl;
            b += 2;
        }

        for (int i = 0; i < 2; i++)
        {
            for (int j = 0; j < n; j++)
            {
                cout << arr[i][j] << " ";
            }
            cout<<endl;
        }
    }
    return 0;
}