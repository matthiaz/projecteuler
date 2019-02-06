defmodule MyList do 
  def sumOfEvenFibonacciNumbersBelowX(intBelow) do 
    Stream.unfold({0,1}, fn {f1,f2} -> {f1, {f2, f1+f2}} end)
    |> Stream.take_while(&(&1 < intBelow))
    |> Enum.filter(fn x-> rem(x,2)==0 end)
    |> Enum.sum
  end
end
