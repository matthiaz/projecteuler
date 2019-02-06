defmodule MyList do 
  def sumOfAllTheNumbersMultiplesOf3Or5BelowX(intNumbersBelow) do 
    Enum.to_list(1..(intNumbersBelow-1))
    |> Enum.filter(fn x -> rem(x,3)==0 or rem(x,5)==0 end)
    |> Enum.sum
  end
end
